<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BCMDataExportsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\BCMDataExports\BCMDataExportsClient>
     */
    public function getClass(): string
    {
        return \Aws\BCMDataExports\BCMDataExportsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createExport',
            'deleteExport',
            'getExecution',
            'getExport',
            'getTable',
            'listExecutions',
            'listExports',
            'listTables',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateExport',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createExport' => $this->createExport(),
            'deleteExport' => $this->deleteExport(),
            'getExecution' => $this->getExecution(),
            'getExport' => $this->getExport(),
            'getTable' => $this->getTable(),
            'listExecutions' => $this->listExecutions(),
            'listExports' => $this->listExports(),
            'listTables' => $this->listTables(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateExport' => $this->updateExport(),
        };
    }
    private function createExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Export'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATION_IN_PROCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_IN_PROCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_IN_PROCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_FAILURE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_PERMISSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BILL_OWNER_CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataQuery'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshCadence'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3OutputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Compression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutputType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TEXT_OR_CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_NEW_REPORT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OVERWRITE_REPORT'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SYNCHRONOUS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Export'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataQuery'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshCadence'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3OutputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Compression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutputType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TEXT_OR_CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_NEW_REPORT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OVERWRITE_REPORT'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SYNCHRONOUS'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRefreshedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_PERMISSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BILL_OWNER_CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                new \PHPStan\Type\Constant\ConstantStringType('TableProperties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Executions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INITIATION_IN_PROCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_IN_PROCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_IN_PROCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELIVERY_FAILURE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_PERMISSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('BILL_OWNER_CHANGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Exports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastRefreshedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_PERMISSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('BILL_OWNER_CHANGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tables'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableProperties'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}