<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MediaStoreDataClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MediaStoreData\MediaStoreDataClient>
     */
    public function getClass(): string
    {
        return \Aws\MediaStoreData\MediaStoreDataClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteObject',
            'describeObject',
            'getObject',
            'listItems',
            'putObject',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteObject' => $this->deleteObject(),
            'describeObject' => $this->describeObject(),
            'getObject' => $this->getObject(),
            'listItems' => $this->listItems(),
            'putObject' => $this->putObject(),
        };
    }
    private function deleteObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentLength'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Body'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentRange'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentLength'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentLength'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OBJECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentSHA256'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('TEMPORAL'),
            ]),
        ]);
    }
}