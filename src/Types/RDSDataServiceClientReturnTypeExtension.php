<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class RDSDataServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\RDSDataService\RDSDataServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\RDSDataService\RDSDataServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchExecuteStatement',
            'beginTransaction',
            'commitTransaction',
            'executeSql',
            'executeStatement',
            'rollbackTransaction',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchExecuteStatement' => $this->batchExecuteStatement(),
            'beginTransaction' => $this->beginTransaction(),
            'commitTransaction' => $this->commitTransaction(),
            'executeSql' => $this->executeSql(),
            'executeStatement' => $this->executeStatement(),
            'rollbackTransaction' => $this->rollbackTransaction(),
        };
    }
    private function batchExecuteStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('updateResults'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('generatedFields'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                                new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('blobValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('arrayValue'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValues'),
                                    new \PHPStan\Type\Constant\ConstantStringType('longValues'),
                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValues'),
                                    new \PHPStan\Type\Constant\ConstantStringType('stringValues'),
                                    new \PHPStan\Type\Constant\ConstantStringType('arrayValues'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\FloatType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\MixedType(),
                                    ])),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function beginTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function commitTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('transactionStatus'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeSql(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sqlStatementResults'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resultFrame'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfRecordsUpdated'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('resultSetMetadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('records'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('columnCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('columnMetadata'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('label'),
                                        new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('isAutoIncrement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('isSigned'),
                                        new \PHPStan\Type\Constant\ConstantStringType('isCurrency'),
                                        new \PHPStan\Type\Constant\ConstantStringType('isCaseSensitive'),
                                        new \PHPStan\Type\Constant\ConstantStringType('nullable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('precision'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scale'),
                                        new \PHPStan\Type\Constant\ConstantStringType('arrayBaseColumnType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                                            new \PHPStan\Type\Constant\ConstantStringType('bitValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('bigIntValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('intValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('realValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('blobValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('arrayValues'),
                                            new \PHPStan\Type\Constant\ConstantStringType('structValue'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ResourceType(),
                                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\MixedType(),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\MixedType(),
                                                ])),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function executeStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('records'),
                new \PHPStan\Type\Constant\ConstantStringType('columnMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfRecordsUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('generatedFields'),
                new \PHPStan\Type\Constant\ConstantStringType('formattedRecords'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                            new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('blobValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('arrayValue'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('booleanValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('longValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('doubleValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('stringValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('arrayValues'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\FloatType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                            ]),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('label'),
                        new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('isAutoIncrement'),
                        new \PHPStan\Type\Constant\ConstantStringType('isSigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('isCurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('isCaseSensitive'),
                        new \PHPStan\Type\Constant\ConstantStringType('nullable'),
                        new \PHPStan\Type\Constant\ConstantStringType('precision'),
                        new \PHPStan\Type\Constant\ConstantStringType('scale'),
                        new \PHPStan\Type\Constant\ConstantStringType('arrayBaseColumnType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('blobValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('arrayValue'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('booleanValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('longValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('doubleValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('stringValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('arrayValues'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\FloatType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rollbackTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('transactionStatus'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}