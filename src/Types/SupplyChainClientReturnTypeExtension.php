<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SupplyChainClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SupplyChain\SupplyChainClient>
     */
    public function getClass(): string
    {
        return \Aws\SupplyChain\SupplyChainClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createBillOfMaterialsImportJob',
            'createDataIntegrationFlow',
            'createDataLakeDataset',
            'createInstance',
            'deleteDataIntegrationFlow',
            'deleteDataLakeDataset',
            'deleteInstance',
            'getBillOfMaterialsImportJob',
            'getDataIntegrationFlow',
            'getDataLakeDataset',
            'getInstance',
            'listDataIntegrationFlows',
            'listDataLakeDatasets',
            'listInstances',
            'listTagsForResource',
            'sendDataIntegrationEvent',
            'tagResource',
            'untagResource',
            'updateDataIntegrationFlow',
            'updateDataLakeDataset',
            'updateInstance',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createBillOfMaterialsImportJob' => $this->createBillOfMaterialsImportJob(),
            'createDataIntegrationFlow' => $this->createDataIntegrationFlow(),
            'createDataLakeDataset' => $this->createDataLakeDataset(),
            'createInstance' => $this->createInstance(),
            'deleteDataIntegrationFlow' => $this->deleteDataIntegrationFlow(),
            'deleteDataLakeDataset' => $this->deleteDataLakeDataset(),
            'deleteInstance' => $this->deleteInstance(),
            'getBillOfMaterialsImportJob' => $this->getBillOfMaterialsImportJob(),
            'getDataIntegrationFlow' => $this->getDataIntegrationFlow(),
            'getDataLakeDataset' => $this->getDataLakeDataset(),
            'getInstance' => $this->getInstance(),
            'listDataIntegrationFlows' => $this->listDataIntegrationFlows(),
            'listDataLakeDatasets' => $this->listDataLakeDatasets(),
            'listInstances' => $this->listInstances(),
            'listTagsForResource' => $this->listTagsForResource(),
            'sendDataIntegrationEvent' => $this->sendDataIntegrationEvent(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDataIntegrationFlow' => $this->updateDataIntegrationFlow(),
            'updateDataLakeDataset' => $this->updateDataLakeDataset(),
            'updateInstance' => $this->updateInstance(),
        };
    }
    private function createBillOfMaterialsImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataIntegrationFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataLakeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataset'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('webAppDnsDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function deleteDataIntegrationFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataLakeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('webAppDnsDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function getBillOfMaterialsImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDataIntegrationFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flow'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('transformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('datasetSource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('options'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('options'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('loadType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dedupeRecords'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('transformationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqlTransformation'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('query'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Target'),
                        new \PHPStan\Type\Constant\ConstantStringType('datasetTarget'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('loadType'),
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeRecords'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getDataLakeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataset'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('webAppDnsDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function listDataIntegrationFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flows'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('sources'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Source'),
                                new \PHPStan\Type\Constant\ConstantStringType('datasetSource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('options'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('options'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('loadType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dedupeRecords'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('transformationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sqlTransformation'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('query'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Target'),
                            new \PHPStan\Type\Constant\ConstantStringType('datasetTarget'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('options'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('options'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('loadType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dedupeRecords'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataLakeDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('schema'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('fields'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instances'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('webAppDnsDomain'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreateFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function sendDataIntegrationEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventId'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateDataIntegrationFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flow'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('transformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('datasetSource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('options'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('options'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('loadType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dedupeRecords'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('transformationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqlTransformation'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('query'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Target'),
                        new \PHPStan\Type\Constant\ConstantStringType('datasetTarget'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('loadType'),
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeRecords'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateDataLakeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataset'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('isRequired'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('webAppDnsDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
}