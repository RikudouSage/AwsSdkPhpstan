<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CognitoSyncClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CognitoSync\CognitoSyncClient>
     */
    public function getClass(): string
    {
        return \Aws\CognitoSync\CognitoSyncClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'bulkPublish',
            'deleteDataset',
            'describeDataset',
            'describeIdentityPoolUsage',
            'describeIdentityUsage',
            'getBulkPublishDetails',
            'getCognitoEvents',
            'getIdentityPoolConfiguration',
            'listDatasets',
            'listIdentityPoolUsage',
            'listRecords',
            'registerDevice',
            'setCognitoEvents',
            'setIdentityPoolConfiguration',
            'subscribeToDataset',
            'unsubscribeFromDataset',
            'updateRecords',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'bulkPublish' => $this->bulkPublish(),
            'deleteDataset' => $this->deleteDataset(),
            'describeDataset' => $this->describeDataset(),
            'describeIdentityPoolUsage' => $this->describeIdentityPoolUsage(),
            'describeIdentityUsage' => $this->describeIdentityUsage(),
            'getBulkPublishDetails' => $this->getBulkPublishDetails(),
            'getCognitoEvents' => $this->getCognitoEvents(),
            'getIdentityPoolConfiguration' => $this->getIdentityPoolConfiguration(),
            'listDatasets' => $this->listDatasets(),
            'listIdentityPoolUsage' => $this->listIdentityPoolUsage(),
            'listRecords' => $this->listRecords(),
            'registerDevice' => $this->registerDevice(),
            'setCognitoEvents' => $this->setCognitoEvents(),
            'setIdentityPoolConfiguration' => $this->setIdentityPoolConfiguration(),
            'subscribeToDataset' => $this->subscribeToDataset(),
            'unsubscribeFromDataset' => $this->unsubscribeFromDataset(),
            'updateRecords' => $this->updateRecords(),
        };
    }
    private function bulkPublish(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Dataset'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumRecords'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Dataset'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumRecords'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeIdentityPoolUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolUsage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncSessionsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeIdentityUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityUsage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getBulkPublishDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('BulkPublishStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('BulkPublishCompleteTime'),
                new \PHPStan\Type\Constant\ConstantStringType('BulkPublishStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCognitoEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Events'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getIdentityPoolConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('PushSync'),
                new \PHPStan\Type\Constant\ConstantStringType('CognitoStreams'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Datasets'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumRecords'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentityPoolUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolUsages'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncSessionsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetSyncCount'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('MergedDatasetNames'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetExists'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetDeletedAfterRequestedSyncCount'),
                new \PHPStan\Type\Constant\ConstantStringType('SyncSessionToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setCognitoEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setIdentityPoolConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('PushSync'),
                new \PHPStan\Type\Constant\ConstantStringType('CognitoStreams'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function subscribeToDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function unsubscribeFromDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
}