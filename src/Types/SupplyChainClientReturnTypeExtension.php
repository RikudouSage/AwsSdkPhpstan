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
            'createDataLakeNamespace',
            'createInstance',
            'deleteDataIntegrationFlow',
            'deleteDataLakeDataset',
            'deleteDataLakeNamespace',
            'deleteInstance',
            'getBillOfMaterialsImportJob',
            'getDataIntegrationEvent',
            'getDataIntegrationFlow',
            'getDataIntegrationFlowExecution',
            'getDataLakeDataset',
            'getDataLakeNamespace',
            'getInstance',
            'listDataIntegrationEvents',
            'listDataIntegrationFlowExecutions',
            'listDataIntegrationFlows',
            'listDataLakeDatasets',
            'listDataLakeNamespaces',
            'listInstances',
            'listTagsForResource',
            'sendDataIntegrationEvent',
            'tagResource',
            'untagResource',
            'updateDataIntegrationFlow',
            'updateDataLakeDataset',
            'updateDataLakeNamespace',
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
            'createDataLakeNamespace' => $this->createDataLakeNamespace(),
            'createInstance' => $this->createInstance(),
            'deleteDataIntegrationFlow' => $this->deleteDataIntegrationFlow(),
            'deleteDataLakeDataset' => $this->deleteDataLakeDataset(),
            'deleteDataLakeNamespace' => $this->deleteDataLakeNamespace(),
            'deleteInstance' => $this->deleteInstance(),
            'getBillOfMaterialsImportJob' => $this->getBillOfMaterialsImportJob(),
            'getDataIntegrationEvent' => $this->getDataIntegrationEvent(),
            'getDataIntegrationFlow' => $this->getDataIntegrationFlow(),
            'getDataIntegrationFlowExecution' => $this->getDataIntegrationFlowExecution(),
            'getDataLakeDataset' => $this->getDataLakeDataset(),
            'getDataLakeNamespace' => $this->getDataLakeNamespace(),
            'getInstance' => $this->getInstance(),
            'listDataIntegrationEvents' => $this->listDataIntegrationEvents(),
            'listDataIntegrationFlowExecutions' => $this->listDataIntegrationFlowExecutions(),
            'listDataIntegrationFlows' => $this->listDataIntegrationFlows(),
            'listDataLakeDatasets' => $this->listDataLakeDatasets(),
            'listDataLakeNamespaces' => $this->listDataLakeNamespaces(),
            'listInstances' => $this->listInstances(),
            'listTagsForResource' => $this->listTagsForResource(),
            'sendDataIntegrationEvent' => $this->sendDataIntegrationEvent(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDataIntegrationFlow' => $this->updateDataIntegrationFlow(),
            'updateDataLakeDataset' => $this->updateDataLakeDataset(),
            'updateDataLakeNamespace' => $this->updateDataLakeNamespace(),
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
                    new \PHPStan\Type\Constant\ConstantStringType('partitionSpec'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('primaryKeys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('YEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDENTITY'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createDataLakeNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function deleteDataLakeNamespace(): ?\PHPStan\Type\Type
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
    private function getDataIntegrationEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('event'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('datasetTargetDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.forecast'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inventorylevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inboundorder'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inboundorderline'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inboundorderlineschedule'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.outboundorderline'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.outboundshipment'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.processheader'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.processoperation'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.processproduct'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.reservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.shipment'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.shipmentstop'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.shipmentstoporder'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.supplyplan'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.dataset'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('datasetLoadExecution'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPEND'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeStrategy'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fieldPriority'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('FIELD_PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sortOrder'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                                            ]),
                                        ])),
                                    ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeStrategy'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fieldPriority'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('FIELD_PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sortOrder'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getDataIntegrationFlowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowExecution'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowName'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('datasetSource'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('diagnosticReportsRootS3URI'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\Constant\ConstantStringType('partitionSpec'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('primaryKeys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('YEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDENTITY'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getDataLakeNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function listDataIntegrationEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('datasetTargetDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.forecast'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inventorylevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inboundorder'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inboundorderline'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.inboundorderlineschedule'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.outboundorderline'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.outboundshipment'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.processheader'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.processoperation'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.processproduct'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.reservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.shipment'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.shipmentstop'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.shipmentstoporder'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.supplyplan'),
                        new \PHPStan\Type\Constant\ConstantStringType('scn.data.dataset'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('datasetLoadExecution'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPEND'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataIntegrationFlowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('flowExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowName'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('datasetSource'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATASET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('datasetIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('diagnosticReportsRootS3URI'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeStrategy'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fieldPriority'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('FIELD_PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sortOrder'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                                            ]),
                                        ])),
                                    ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeStrategy'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fieldPriority'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('FIELD_PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sortOrder'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('partitionSpec'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('primaryKeys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('YEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDENTITY'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataLakeNamespaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespaces'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeStrategy'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fieldPriority'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('FIELD_PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sortOrder'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                                            ]),
                                        ])),
                                    ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('dedupeStrategy'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fieldPriority'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('FIELD_PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sortOrder'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                                            ]),
                                        ])),
                                    ]),
                                ]),
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
                    new \PHPStan\Type\Constant\ConstantStringType('partitionSpec'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('primaryKeys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('YEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDENTITY'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateDataLakeNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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