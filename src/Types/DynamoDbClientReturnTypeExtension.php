<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DynamoDbClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DynamoDb\DynamoDbClient>
     */
    public function getClass(): string
    {
        return \Aws\DynamoDb\DynamoDbClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchExecuteStatement',
            'batchGetItem',
            'batchWriteItem',
            'createBackup',
            'createGlobalTable',
            'createTable',
            'deleteBackup',
            'deleteItem',
            'deleteResourcePolicy',
            'deleteTable',
            'describeBackup',
            'describeContinuousBackups',
            'describeContributorInsights',
            'describeEndpoints',
            'describeExport',
            'describeGlobalTable',
            'describeGlobalTableSettings',
            'describeImport',
            'describeKinesisStreamingDestination',
            'describeLimits',
            'describeTable',
            'describeTableReplicaAutoScaling',
            'describeTimeToLive',
            'disableKinesisStreamingDestination',
            'enableKinesisStreamingDestination',
            'executeStatement',
            'executeTransaction',
            'exportTableToPointInTime',
            'getItem',
            'getResourcePolicy',
            'importTable',
            'listBackups',
            'listContributorInsights',
            'listExports',
            'listGlobalTables',
            'listImports',
            'listTables',
            'listTagsOfResource',
            'putItem',
            'putResourcePolicy',
            'query',
            'restoreTableFromBackup',
            'restoreTableToPointInTime',
            'scan',
            'tagResource',
            'transactGetItems',
            'transactWriteItems',
            'untagResource',
            'updateContinuousBackups',
            'updateContributorInsights',
            'updateGlobalTable',
            'updateGlobalTableSettings',
            'updateItem',
            'updateKinesisStreamingDestination',
            'updateTable',
            'updateTableReplicaAutoScaling',
            'updateTimeToLive',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchExecuteStatement' => $this->batchExecuteStatement(),
            'batchGetItem' => $this->batchGetItem(),
            'batchWriteItem' => $this->batchWriteItem(),
            'createBackup' => $this->createBackup(),
            'createGlobalTable' => $this->createGlobalTable(),
            'createTable' => $this->createTable(),
            'deleteBackup' => $this->deleteBackup(),
            'deleteItem' => $this->deleteItem(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteTable' => $this->deleteTable(),
            'describeBackup' => $this->describeBackup(),
            'describeContinuousBackups' => $this->describeContinuousBackups(),
            'describeContributorInsights' => $this->describeContributorInsights(),
            'describeEndpoints' => $this->describeEndpoints(),
            'describeExport' => $this->describeExport(),
            'describeGlobalTable' => $this->describeGlobalTable(),
            'describeGlobalTableSettings' => $this->describeGlobalTableSettings(),
            'describeImport' => $this->describeImport(),
            'describeKinesisStreamingDestination' => $this->describeKinesisStreamingDestination(),
            'describeLimits' => $this->describeLimits(),
            'describeTable' => $this->describeTable(),
            'describeTableReplicaAutoScaling' => $this->describeTableReplicaAutoScaling(),
            'describeTimeToLive' => $this->describeTimeToLive(),
            'disableKinesisStreamingDestination' => $this->disableKinesisStreamingDestination(),
            'enableKinesisStreamingDestination' => $this->enableKinesisStreamingDestination(),
            'executeStatement' => $this->executeStatement(),
            'executeTransaction' => $this->executeTransaction(),
            'exportTableToPointInTime' => $this->exportTableToPointInTime(),
            'getItem' => $this->getItem(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'importTable' => $this->importTable(),
            'listBackups' => $this->listBackups(),
            'listContributorInsights' => $this->listContributorInsights(),
            'listExports' => $this->listExports(),
            'listGlobalTables' => $this->listGlobalTables(),
            'listImports' => $this->listImports(),
            'listTables' => $this->listTables(),
            'listTagsOfResource' => $this->listTagsOfResource(),
            'putItem' => $this->putItem(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'query' => $this->query(),
            'restoreTableFromBackup' => $this->restoreTableFromBackup(),
            'restoreTableToPointInTime' => $this->restoreTableToPointInTime(),
            'scan' => $this->scan(),
            'tagResource' => $this->tagResource(),
            'transactGetItems' => $this->transactGetItems(),
            'transactWriteItems' => $this->transactWriteItems(),
            'untagResource' => $this->untagResource(),
            'updateContinuousBackups' => $this->updateContinuousBackups(),
            'updateContributorInsights' => $this->updateContributorInsights(),
            'updateGlobalTable' => $this->updateGlobalTable(),
            'updateGlobalTableSettings' => $this->updateGlobalTableSettings(),
            'updateItem' => $this->updateItem(),
            'updateKinesisStreamingDestination' => $this->updateKinesisStreamingDestination(),
            'updateTable' => $this->updateTable(),
            'updateTableReplicaAutoScaling' => $this->updateTableReplicaAutoScaling(),
            'updateTimeToLive' => $this->updateTimeToLive(),
        };
    }
    private function batchExecuteStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Responses'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Item'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Item'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConditionalCheckFailed'),
                                new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionSizeLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('TransactionConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('DuplicateItem'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                                new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                new \PHPStan\Type\Constant\ConstantStringType('M'),
                                new \PHPStan\Type\Constant\ConstantStringType('L'),
                                new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Responses'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('B'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('M'),
                        new \PHPStan\Type\Constant\ConstantStringType('L'),
                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributesToGet'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsistentRead'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpressionAttributeNames'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchWriteItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedItems'),
                new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PutRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteRequest'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Item'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                                new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                new \PHPStan\Type\Constant\ConstantStringType('M'),
                                new \PHPStan\Type\Constant\ConstantStringType('L'),
                                new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                                new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                new \PHPStan\Type\Constant\ConstantStringType('M'),
                                new \PHPStan\Type\Constant\ConstantStringType('L'),
                                new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                    ]),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('SizeEstimateRangeGB'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupCreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupExpiryDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_BACKUP'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createGlobalTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalTableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableName'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingModeSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivalSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableClassSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConsistency'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('Backfilling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceBackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceTableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreInProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalBackupArn'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceTableDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceTableFeatureDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupSizeBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupCreationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupExpiryDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_BACKUP'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableCreationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeToLiveDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeToLiveStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionMetrics'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BS'),
                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\MixedType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeEstimateRangeGB'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('B'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('M'),
                        new \PHPStan\Type\Constant\ConstantStringType('L'),
                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingModeSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivalSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableClassSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConsistency'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('Backfilling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceBackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceTableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreInProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalBackupArn'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceTableDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceTableFeatureDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupSizeBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupCreationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupExpiryDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_BACKUP'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableCreationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeToLiveDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeToLiveStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeContinuousBackups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuousBackupsDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContinuousBackupsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PointInTimeRecoveryDescription'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PointInTimeRecoveryStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryPeriodInDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeContributorInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                new \PHPStan\Type\Constant\ConstantStringType('ContributorInsightsRuleList'),
                new \PHPStan\Type\Constant\ConstantStringType('ContributorInsightsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureException'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExceptionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExceptionDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('CachePeriodInMinutes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportManifest'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3SseAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3SseKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('BilledSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncrementalExportSpecification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB_JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ION'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL_EXPORT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExportFromTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportToTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportViewType'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeGlobalTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalTableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableName'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeGlobalTableSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalTableName'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicaSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaBillingModeSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedReadCapacityAutoScalingSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedWriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedWriteCapacityAutoScalingSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaGlobalSecondaryIndexSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedReadCapacityAutoScalingSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedWriteCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedWriteCapacityAutoScalingSettings'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportTableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImportArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputFormatOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputCompressionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableCreationParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessedSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessedItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB_JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZSTD'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSESpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeKinesisStreamingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamDestinations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationStatusDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateCreationDateTimePrecision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountMaxReadCapacityUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountMaxWriteCapacityUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('TableMaxReadCapacityUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('TableMaxWriteCapacityUnits'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Table'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingModeSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivalSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableClassSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConsistency'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('Backfilling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceBackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceTableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreInProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalBackupArn'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeTableReplicaAutoScaling(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableAutoScalingDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedReadCapacityAutoScalingSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedWriteCapacityAutoScalingSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedReadCapacityAutoScalingSettings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedWriteCapacityAutoScalingSettings'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\FloatType(),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\FloatType(),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeTimeToLive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TimeToLiveDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeToLiveStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disableKinesisStreamingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableKinesisStreamingConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateCreationDateTimePrecision'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                        new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function enableKinesisStreamingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableKinesisStreamingConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateCreationDateTimePrecision'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                        new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function executeStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedKey'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('B'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('M'),
                        new \PHPStan\Type\Constant\ConstantStringType('L'),
                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BS'),
                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\MixedType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function executeTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Responses'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Item'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function exportTableToPointInTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportManifest'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3SseAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3SseKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('BilledSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncrementalExportSpecification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB_JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ION'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL_EXPORT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExportFromTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportToTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportViewType'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Item'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BS'),
                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\MixedType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportTableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImportArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputFormatOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputCompressionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableCreationParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessedSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessedItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB_JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZSTD'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSESpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listBackups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedBackupArn'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupCreationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupExpiryDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupSizeBytes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_BACKUP'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContributorInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContributorInsightsSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContributorInsightsStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
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
                new \PHPStan\Type\Constant\ConstantStringType('ExportSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExportArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_EXPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL_EXPORT'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGlobalTables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalTables'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedGlobalTableName'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalTableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ImportArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImportStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketOwner'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB_JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('ION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('TableNames'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedTableName'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsOfResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionMetrics'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BS'),
                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\MixedType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeEstimateRangeGB'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('B'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('M'),
                        new \PHPStan\Type\Constant\ConstantStringType('L'),
                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function query(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                new \PHPStan\Type\Constant\ConstantStringType('ScannedCount'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('B'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('M'),
                        new \PHPStan\Type\Constant\ConstantStringType('L'),
                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BS'),
                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\MixedType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function restoreTableFromBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingModeSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivalSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableClassSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConsistency'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('Backfilling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceBackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceTableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreInProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalBackupArn'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function restoreTableToPointInTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingModeSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivalSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableClassSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConsistency'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('Backfilling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceBackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceTableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreInProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalBackupArn'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function scan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                new \PHPStan\Type\Constant\ConstantStringType('ScannedCount'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('B'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('M'),
                        new \PHPStan\Type\Constant\ConstantStringType('L'),
                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BS'),
                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\MixedType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function transactGetItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('Responses'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Item'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function transactWriteItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionMetrics'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('SizeEstimateRangeGB'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ]))),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateContinuousBackups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuousBackupsDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContinuousBackupsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PointInTimeRecoveryDescription'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PointInTimeRecoveryStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryPeriodInDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateContributorInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                new \PHPStan\Type\Constant\ConstantStringType('ContributorInsightsStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function updateGlobalTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalTableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableName'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateGlobalTableSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalTableName'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicaSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaBillingModeSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedReadCapacityAutoScalingSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedWriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedWriteCapacityAutoScalingSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaGlobalSecondaryIndexSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedReadCapacityAutoScalingSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedWriteCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedWriteCapacityAutoScalingSettings'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionMetrics'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BS'),
                    new \PHPStan\Type\Constant\ConstantStringType('M'),
                    new \PHPStan\Type\Constant\ConstantStringType('L'),
                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\MixedType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCollectionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeEstimateRangeGB'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('B'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        new \PHPStan\Type\Constant\ConstantStringType('M'),
                        new \PHPStan\Type\Constant\ConstantStringType('L'),
                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateKinesisStreamingDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateKinesisStreamingConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateCreationDateTimePrecision'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                        new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingModeSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTableVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivalSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableClassSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConsistency'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('Backfilling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusPercentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaInaccessibleDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaTableClassSummary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmThroughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceBackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceTableArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreInProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivalBackupArn'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_INFREQUENT_ACCESS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxReadRequestUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxWriteRequestUnits'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteUnitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateTableReplicaAutoScaling(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableAutoScalingDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedReadCapacityAutoScalingSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaProvisionedWriteCapacityAutoScalingSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedReadCapacityAutoScalingSettings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedWriteCapacityAutoScalingSettings'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\FloatType(),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                                ], [
                                                    new \PHPStan\Type\BooleanType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\FloatType(),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateTimeToLive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TimeToLiveSpecification'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}