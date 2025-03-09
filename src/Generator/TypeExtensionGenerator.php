<?php

namespace Rikudou\AwsSdkPhpstan\Generator;

use PhpParser\Node\Name\FullyQualified;
use Aws\Result;
use DateTimeInterface;
use DirectoryIterator;
use LogicException;
use PhpParser\Builder\Class_;
use PhpParser\Builder\Method;
use PhpParser\Builder\Namespace_;
use PhpParser\Builder\Param;
use PhpParser\Node\Arg;
use PhpParser\Node\ArrayItem;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\Cast\String_ as StringCast;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\Match_;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Throw_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\MatchArm;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Return_;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Type\ArrayType;
use PHPStan\Type\BooleanType;
use PHPStan\Type\Constant\ConstantArrayType;
use PHPStan\Type\Constant\ConstantStringType;
use PHPStan\Type\DynamicMethodReturnTypeExtension;
use PHPStan\Type\FloatType;
use PHPStan\Type\Generic\GenericObjectType;
use PHPStan\Type\IntegerType;
use PHPStan\Type\MixedType;
use PHPStan\Type\NullType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\ResourceType;
use PHPStan\Type\StringType;
use PHPStan\Type\Type as PhpstanType;
use PHPStan\Type\UnionType;
use Psr\Http\Message\StreamInterface;
use RuntimeException;
use Symfony\Component\Yaml\Yaml;

/**
 * @internal
 */
final class TypeExtensionGenerator
{
    private string $dataDir;

    private string $extensionFile;

    private ?array $manifest = null;

    private ?array $extensionFileContent = null;

    public function __construct(
        string $vendorDirectory,
        private array $only = [],
    ) {
        $this->dataDir = $vendorDirectory . '/aws/aws-sdk-php/src/data';
        $this->extensionFile = __DIR__ . '/../../extension.neon';
    }

    public function generate(): void
    {
        $this->cleanupTypes();

        $dumper = new PrettyPrinter();
        $apiNames = scandir($this->dataDir);
        foreach ($apiNames as $apiName) {
            if (!is_dir(sprintf('%s/%s', $this->dataDir, $apiName)) || $apiName === '.' || $apiName === '..') {
                continue;
            }

            $versions = array_filter(
                scandir(sprintf('%s/%s', $this->dataDir, $apiName)),
                fn (string $dir) => $dir !== '.' && $dir !== '..',
            );
            if ($versions === []) {
                continue;
            }

            $version = $versions[array_key_last($versions)];
            $apiDoc = require sprintf('%s/%s/%s/api-2.json.php', $this->dataDir, $apiName, $version);

            $class = $this->createClass($apiName, $apiDoc);
            if ($class === null) {
                continue;
            }

            $namespace = 'Rikudou\\AwsSdkPhpstan\\Types';
            $result = "<?php\n\n" . $dumper->prettyPrint([
                (new Namespace_('Rikudou\\AwsSdkPhpstan\\Types'))->getNode(),
                $class->getNode(),
            ]);
            $this->addServiceToYaml($namespace . '\\' . $class->getNode()->name);
            file_put_contents(__DIR__ . sprintf('/../Types/%s.php', $class->getNode()->name), $result);
        }
    }

    private function createClass(string $apiName, array $apiDoc): ?Class_
    {
        $manifest = $this->getManifest();

        $shortName = $manifest[$apiName]['namespace'] . 'Client';
        $className = 'Aws\\' . $manifest[$apiName]['namespace'] . '\\' . $shortName;
        if (!class_exists($className)) {
            return null;
        }

        $returnTypeClassName = $shortName . 'ReturnTypeExtension';

        if ($this->only && !in_array($className, $this->only, true)) {
            return null;
        }

        $handledMethodNames = new Array_([]);
        $methodMatch = new Match_(
            new StringCast(new PropertyFetch(new Variable('methodCall'), 'name')),
            [
                new MatchArm(
                    null,
                    new Throw_(
                        new New_(
                            new FullyQualified(RuntimeException::class),
                            [
                                new Arg(new String_('Unsupported method')),
                            ],
                        ),
                    ),
                ),
            ],
        );

        $class = $this->createBasicClassStructure(
            $returnTypeClassName,
            new FullyQualified($className),
            $handledMethodNames,
            $methodMatch,
        );

        foreach ($apiDoc['operations'] as $operationName => $operation) {
            $handledMethodNames->items[] = new ArrayItem(new String_(lcfirst($operationName)));
            $methodMatch->arms[] = new MatchArm(
                [new String_(lcfirst($operationName))],
                new MethodCall(new Variable('this'), lcfirst($operationName))
            );

            $method = $this->createApiCallMethod($operationName, $operation, $apiDoc);
            $class->addStmt($method);
        }

        return $class;
    }

    private function getManifest(): array
    {
        $this->manifest ??= require $this->dataDir . '/manifest.json.php';

        return $this->manifest;
    }

    private function createBasicClassStructure(
        string $className,
        Name $awsClassFullName,
        Array_ $methodNamesArray,
        Match_ $methodMapMatch,
    ): Class_ {
        return (new Class_($className))
            ->makeFinal()
            ->addStmt(
                (new Method('getClass'))
                    ->makePublic()
                    ->setReturnType('string')
                    ->setDocComment("/**\n * @return class-string<\\{$awsClassFullName}>\n */")
                    ->addStmt(new Return_(
                        new ClassConstFetch(
                            $awsClassFullName,
                            'class',
                        )
                    ))
            )
            ->addStmt(
                (new Method('isMethodSupported'))
                    ->makePublic()
                    ->setReturnType('bool')
                    ->addParam(
                        (new Param('methodReflection'))
                            ->setType(new FullyQualified(MethodReflection::class))
                    )
                    ->addStmt(new Return_(
                        new FuncCall(
                            new Name('in_array'),
                            [
                                new Arg(new MethodCall(new Variable('methodReflection'), 'getName')),
                                new Arg($methodNamesArray),
                                new Arg(new ConstFetch(new Name('true'))),
                            ]
                        )
                    ))
            )
            ->addStmt(
                (new Method('getTypeFromMethodCall'))
                ->makePublic()
                ->setReturnType(new NullableType(new FullyQualified(PhpstanType::class)))
                ->addParam((new Param('methodReflection'))->setType(new FullyQualified(MethodReflection::class)))
                ->addParam((new Param('methodCall'))->setType(new FullyQualified(MethodCall::class)))
                ->addParam((new Param('scope'))->setType(new FullyQualified(Scope::class)))
                ->addStmt(new Return_($methodMapMatch))
            )
            ->implement(new FullyQualified(DynamicMethodReturnTypeExtension::class))
        ;
    }

    private function createApiCallMethod(string $operationName, array $operation, array $apiDoc): Method
    {
        $method = (new Method(lcfirst($operationName)))
            ->makePrivate()
            ->setReturnType(new NullableType(new FullyQualified(PhpstanType::class)))
        ;

        $output = $operation['output']['shape'] ?? null;

        if ($output !== null) {
            $output = $apiDoc['shapes'][$output];
        }

        $return = new New_(new FullyQualified(GenericObjectType::class), [
            new Arg(new String_(new FullyQualified(Result::class))),
            new Arg(new Array_()),
        ]);
        /** @var Array_ $arrayType */
        $arrayType = &$return->args[1]->value;

        if (!$output) {
            $arrayType->items[] = new New_(new FullyQualified(ArrayType::class), [
                new Arg(new New_(new FullyQualified(StringType::class))),
                new Arg(new New_(new FullyQualified(NullType::class))),
            ]);
        } else {
            $type = new New_(new FullyQualified(ConstantArrayType::class));

            $keys = new Array_();
            $values = new Array_();
            foreach ($output['members'] as $memberName => $data) {
                $keys->items[] = new New_(new FullyQualified(ConstantStringType::class), [new Arg(new String_($memberName))]);
                $valueShape = $apiDoc['shapes'][$data['shape']];
                $values->items[] = $this->transformValueShape($valueShape, $data['shape'], $apiDoc);
            }

            $type->args[] = new Arg($keys);
            $type->args[] = new Arg($values);
            $arrayType->items[] = $type;
        }

        $method->addStmt(new Return_($return));

        return $method;
    }

    private function transformValueShape(array $shape, string $shapeName, array $apiDoc, array $callStack = [])
    {
        if (in_array($shapeName, $callStack, true)) {
            return new New_(new FullyQualified(MixedType::class));
        }

        $callStack[] = $shapeName;

        if ($shape['type'] === 'string') {
            return $this->transformStringShape($shape);
        }

        if ($shape['type'] === 'boolean') {
            return $this->transformBooleanShape();
        }

        if ($shape['type'] === 'structure') {
            return $this->transformStructureShape($shape, $apiDoc, $callStack);
        }

        if ($shape['type'] === 'timestamp') {
            return $this->transformTimestampShape();
        }

        if ($shape['type'] === 'list') {
            return $this->transformListShape($shape, $apiDoc, $callStack);
        }

        if ($shape['type'] === 'blob') {
            return $this->transformBlobShape();
        }

        if ($shape['type'] === 'long' || $shape['type'] === 'integer') {
            return $this->transformIntegerShape();
        }

        if ($shape['type'] === 'map') {
            return $this->transformMapShape($shape, $apiDoc, $callStack);
        }

        if ($shape['type'] === 'double' || $shape['type'] === 'float') {
            return $this->transformFloatShape();
        }

        throw new LogicException("There's no way to parse a shape of type " . $shape['type']);
    }

    private function transformStringShape(array $shape): New_
    {
        if (!isset($shape['enum'])) {
            return new New_(new FullyQualified(StringType::class));
        }

        if (count($shape['enum']) === 1) {
            return new New_(new FullyQualified(ConstantStringType::class), [new Arg(new String_($shape['enum'][0]))]);
        }

        return new New_(
            new FullyQualified(UnionType::class),
            [
                new Arg(new Array_(
                    array_map(
                        fn (string $enumValue) => new ArrayItem(
                            new New_(new FullyQualified(ConstantStringType::class), [new Arg(new String_($enumValue))]),
                        ),
                        $shape['enum'],
                    )
                ))
            ]
        );
    }

    private function transformBooleanShape(): New_
    {
        return new New_(new FullyQualified(BooleanType::class));
    }

    private function transformStructureShape(array $shape, array $apiDoc, array $callStack): New_
    {
        $result = new New_(new FullyQualified(ConstantArrayType::class));
        $keys = new Array_();
        $values = new Array_();
        foreach ($shape['members'] as $memberName => $childShape) {
            $keys->items[] = new New_(new FullyQualified(ConstantStringType::class), [new Arg(new String_($memberName))]);
            $valueShape = $apiDoc['shapes'][$childShape['shape']];
            $values->items[] = $this->transformValueShape($valueShape, $childShape['shape'], $apiDoc, $callStack);
        }

        $result->args[] = new Arg($keys);
        $result->args[] = new Arg($values);

        return $result;
    }

    private function transformTimestampShape(): New_
    {
        return new New_(new FullyQualified(ObjectType::class), [
            new Arg(new String_(new FullyQualified(DateTimeInterface::class))),
        ]);
    }

    private function transformListShape(array $shape, array $apiDoc, array $callStack): New_
    {
        $result = new New_(new FullyQualified(ArrayType::class), [
            new Arg(new New_(new FullyQualified(IntegerType::class))),
        ]);

        $values = new Array_();
        if (isset($shape['member'])) {
            $shape['members'] = [$shape['member']];
        }

        foreach ($shape['members'] ?? [] as $childShape) {
            $valueShape = $apiDoc['shapes'][$childShape['shape']];
            $values->items[] = $this->transformValueShape($valueShape, $childShape['shape'], $apiDoc, $callStack);
        }

//        if (count($values->items) === 1) {
//            return $values->items[0];
//        }

        $result->args[] = new Arg(
            new New_(
                new FullyQualified(UnionType::class),
                [
                    new Arg($values),
                ],
            ),
        );

        return $result;
    }

    private function transformBlobShape(): New_
    {
        return new New_(
            new FullyQualified(UnionType::class),
            [
                new Arg(new Array_([
                    new ArrayItem(new New_(new FullyQualified(StringType::class))),
                    new ArrayItem(new New_(new FullyQualified(ResourceType::class))),
                    new ArrayItem(new New_(new FullyQualified(ObjectType::class), [
                        new Arg(new String_(new FullyQualified(StreamInterface::class))),
                    ])),
                ])),
            ],
        );
    }

    private function transformIntegerShape(): New_
    {
        return new New_(new FullyQualified(IntegerType::class));
    }

    private function transformMapShape(array $shape, array $apiDoc, array $callStack): New_
    {

        $keyType = $this->transformValueShape($apiDoc['shapes'][$shape['key']['shape']], $shape['key']['shape'], $apiDoc, $callStack);
        $valueType = $this->transformValueShape($apiDoc['shapes'][$shape['value']['shape']], $shape['value']['shape'], $apiDoc, $callStack);

        return new New_(
            new FullyQualified(ArrayType::class),
            [
                new Arg($keyType),
                new Arg($valueType),
            ],
        );
    }

    private function transformFloatShape(): New_
    {
        return new New_(new FullyQualified(FloatType::class));
    }

    private function addServiceToYaml(string $className): void
    {
        $yaml = $this->getYamlExtensionContent();
        $yaml['services'][] = [
            'class' => $className,
            'tags' => [
                'phpstan.broker.dynamicMethodReturnTypeExtension',
            ],
        ];
        $this->extensionFileContent = $yaml;
    }

    private function getYamlExtensionContent(): array
    {
        if ($this->extensionFileContent === null) {
            $this->extensionFileContent = Yaml::parse(str_replace("\t", '  ', file_get_contents($this->extensionFile)));
            $this->extensionFileContent['services'] = [];
        }

        return $this->extensionFileContent;
    }

    public function __destruct()
    {
        file_put_contents($this->extensionFile, Yaml::dump($this->extensionFileContent, 10));
    }

    private function cleanupTypes(): void
    {
        $directory = new DirectoryIterator(__DIR__ . '/../Types');
        foreach ($directory as $file) {
            assert($file instanceof DirectoryIterator);
            if (!$file->isFile()) {
                continue;
            }

            unlink($file->getRealPath());
        }
    }
}
