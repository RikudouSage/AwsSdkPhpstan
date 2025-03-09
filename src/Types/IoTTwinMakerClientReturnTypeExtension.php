<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTTwinMakerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTTwinMaker\IoTTwinMakerClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTTwinMaker\IoTTwinMakerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchPutPropertyValues',
            'cancelMetadataTransferJob',
            'createComponentType',
            'createEntity',
            'createMetadataTransferJob',
            'createScene',
            'createSyncJob',
            'createWorkspace',
            'deleteComponentType',
            'deleteEntity',
            'deleteScene',
            'deleteSyncJob',
            'deleteWorkspace',
            'executeQuery',
            'getComponentType',
            'getEntity',
            'getMetadataTransferJob',
            'getPricingPlan',
            'getPropertyValue',
            'getPropertyValueHistory',
            'getScene',
            'getSyncJob',
            'getWorkspace',
            'listComponentTypes',
            'listComponents',
            'listEntities',
            'listMetadataTransferJobs',
            'listProperties',
            'listScenes',
            'listSyncJobs',
            'listSyncResources',
            'listTagsForResource',
            'listWorkspaces',
            'tagResource',
            'untagResource',
            'updateComponentType',
            'updateEntity',
            'updatePricingPlan',
            'updateScene',
            'updateWorkspace',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchPutPropertyValues' => $this->batchPutPropertyValues(),
            'cancelMetadataTransferJob' => $this->cancelMetadataTransferJob(),
            'createComponentType' => $this->createComponentType(),
            'createEntity' => $this->createEntity(),
            'createMetadataTransferJob' => $this->createMetadataTransferJob(),
            'createScene' => $this->createScene(),
            'createSyncJob' => $this->createSyncJob(),
            'createWorkspace' => $this->createWorkspace(),
            'deleteComponentType' => $this->deleteComponentType(),
            'deleteEntity' => $this->deleteEntity(),
            'deleteScene' => $this->deleteScene(),
            'deleteSyncJob' => $this->deleteSyncJob(),
            'deleteWorkspace' => $this->deleteWorkspace(),
            'executeQuery' => $this->executeQuery(),
            'getComponentType' => $this->getComponentType(),
            'getEntity' => $this->getEntity(),
            'getMetadataTransferJob' => $this->getMetadataTransferJob(),
            'getPricingPlan' => $this->getPricingPlan(),
            'getPropertyValue' => $this->getPropertyValue(),
            'getPropertyValueHistory' => $this->getPropertyValueHistory(),
            'getScene' => $this->getScene(),
            'getSyncJob' => $this->getSyncJob(),
            'getWorkspace' => $this->getWorkspace(),
            'listComponentTypes' => $this->listComponentTypes(),
            'listComponents' => $this->listComponents(),
            'listEntities' => $this->listEntities(),
            'listMetadataTransferJobs' => $this->listMetadataTransferJobs(),
            'listProperties' => $this->listProperties(),
            'listScenes' => $this->listScenes(),
            'listSyncJobs' => $this->listSyncJobs(),
            'listSyncResources' => $this->listSyncResources(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorkspaces' => $this->listWorkspaces(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateComponentType' => $this->updateComponentType(),
            'updateEntity' => $this->updateEntity(),
            'updatePricingPlan' => $this->updatePricingPlan(),
            'updateScene' => $this->updateScene(),
            'updateWorkspace' => $this->updateWorkspace(),
        };
    }
    private function batchPutPropertyValues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('entry'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entityPropertyReference'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyValues'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('componentPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('externalIdProperty'),
                                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                                        ], [
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\MixedType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function cancelMetadataTransferJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metadataTransferJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('progress'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedPosition'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('succeededCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('skippedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('failedCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createComponentType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function createEntity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function createMetadataTransferJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metadataTransferJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedPosition'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createScene(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createSyncJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function createWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteComponentType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function deleteEntity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function deleteScene(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSyncJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function deleteWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('columnDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('rows'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rowData'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getComponentType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('isSingleton'),
                new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('propertyDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('extendsFrom'),
                new \PHPStan\Type\Constant\ConstantStringType('functions'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('isAbstract'),
                new \PHPStan\Type\Constant\ConstantStringType('isSchemaInitialized'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('propertyGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('syncSource'),
                new \PHPStan\Type\Constant\ConstantStringType('componentTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('compositeComponentTypes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isTimeSeries'),
                    new \PHPStan\Type\Constant\ConstantStringType('isRequiredInEntity'),
                    new \PHPStan\Type\Constant\ConstantStringType('isExternalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('isStoredExternally'),
                    new \PHPStan\Type\Constant\ConstantStringType('isImported'),
                    new \PHPStan\Type\Constant\ConstantStringType('isFinal'),
                    new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('nestedType'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('unitOfMeasure'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationship'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RELATIONSHIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAP'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetComponentTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('relationshipType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('requiredProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('implementedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKSPACE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('isNative'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('groupType'),
                    new \PHPStan\Type\Constant\ConstantStringType('propertyNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('TABULAR'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function getEntity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                new \PHPStan\Type\Constant\ConstantStringType('entityName'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('components'),
                new \PHPStan\Type\Constant\ConstantStringType('parentEntityId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasChildEntities'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('syncSource'),
                new \PHPStan\Type\Constant\ConstantStringType('areAllComponentsReturned'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('definedIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    new \PHPStan\Type\Constant\ConstantStringType('propertyGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('areAllPropertiesReturned'),
                    new \PHPStan\Type\Constant\ConstantStringType('compositeComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('areAllCompositeComponentsReturned'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('definition'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('areAllPropertyValuesReturned'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('isTimeSeries'),
                            new \PHPStan\Type\Constant\ConstantStringType('isRequiredInEntity'),
                            new \PHPStan\Type\Constant\ConstantStringType('isExternalId'),
                            new \PHPStan\Type\Constant\ConstantStringType('isStoredExternally'),
                            new \PHPStan\Type\Constant\ConstantStringType('isImported'),
                            new \PHPStan\Type\Constant\ConstantStringType('isFinal'),
                            new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('nestedType'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('unitOfMeasure'),
                                new \PHPStan\Type\Constant\ConstantStringType('relationship'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RELATIONSHIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAP'),
                                ]),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\MixedType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetComponentTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relationshipType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupType'),
                        new \PHPStan\Type\Constant\ConstantStringType('propertyNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('TABULAR'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('definedIn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('propertyGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('syncSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupType'),
                            new \PHPStan\Type\Constant\ConstantStringType('propertyNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('TABULAR'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getMetadataTransferJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metadataTransferJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataTransferJobRole'),
                new \PHPStan\Type\Constant\ConstantStringType('reportUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('progress'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotSiteWiseConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotTwinMakerConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('iotsitewise'),
                            new \PHPStan\Type\Constant\ConstantStringType('iottwinmaker'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('filterByAssetModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('filterByAsset'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assetModelExternalId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('includeOffspring'),
                                        new \PHPStan\Type\Constant\ConstantStringType('includeAssets'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('assetExternalId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('includeOffspring'),
                                        new \PHPStan\Type\Constant\ConstantStringType('includeAssetModel'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workspace'),
                            new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('filterByComponentType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('filterByEntity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('iotTwinMakerConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotsitewise'),
                        new \PHPStan\Type\Constant\ConstantStringType('iottwinmaker'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workspace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedPosition'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('succeededCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('skippedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('failedCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getPricingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('currentPricingPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('pendingPricingPlan'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('billableEntityCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('bundleInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReason'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bundleNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('pricingTier'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_4'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIERED_BUNDLE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_TIER_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY_COUNT_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_MODE_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERWRITTEN'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('billableEntityCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('bundleInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReason'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bundleNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('pricingTier'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_4'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIERED_BUNDLE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_TIER_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY_COUNT_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_MODE_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERWRITTEN'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPropertyValue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('propertyValues'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tabularPropertyValues'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('propertyReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('propertyValue'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalIdProperty'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('propertyName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getPropertyValueHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('propertyValues'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('entityPropertyReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('componentPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalIdProperty'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('propertyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('time'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\MixedType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getScene(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('sceneId'),
                new \PHPStan\Type\Constant\ConstantStringType('contentLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('sceneMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('generatedSceneMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('MATTERPORT_ERROR'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSyncJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('syncSource'),
                new \PHPStan\Type\Constant\ConstantStringType('syncRole'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('linkedServices'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                new \PHPStan\Type\Constant\ConstantStringType('role'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listComponentTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('componentTypeSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('maxResults'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentTypeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listComponents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('componentSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('definedIn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('propertyGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('syncSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupType'),
                            new \PHPStan\Type\Constant\ConstantStringType('propertyNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('TABULAR'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('entitySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityName'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parentEntityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('hasChildEntities'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMetadataTransferJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metadataTransferJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('metadataTransferJobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('progress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                            new \PHPStan\Type\Constant\ConstantStringType('queuedPosition'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('totalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('succeededCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('skippedCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('failedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('propertySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('definition'),
                        new \PHPStan\Type\Constant\ConstantStringType('propertyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('areAllPropertyValuesReturned'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('isTimeSeries'),
                            new \PHPStan\Type\Constant\ConstantStringType('isRequiredInEntity'),
                            new \PHPStan\Type\Constant\ConstantStringType('isExternalId'),
                            new \PHPStan\Type\Constant\ConstantStringType('isStoredExternally'),
                            new \PHPStan\Type\Constant\ConstantStringType('isImported'),
                            new \PHPStan\Type\Constant\ConstantStringType('isFinal'),
                            new \PHPStan\Type\Constant\ConstantStringType('isInherited'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('nestedType'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('unitOfMeasure'),
                                new \PHPStan\Type\Constant\ConstantStringType('relationship'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RELATIONSHIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAP'),
                                ]),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\MixedType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetComponentTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('relationshipType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('listValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('mapValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('relationshipValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetEntityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetComponentName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listScenes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sceneSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sceneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSyncJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('syncJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('syncSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                                ]),
                                new \PHPStan\Type\StringType(),
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
    private function listSyncResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('syncResources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENTITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPONENT_TYPE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_INITIALIZING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_CREATING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE_COMPONENT_FAILURE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspaceSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('linkedServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
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
    private function updateComponentType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('componentTypeId'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function updateEntity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function updatePricingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('currentPricingPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('pendingPricingPlan'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('billableEntityCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('bundleInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReason'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bundleNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('pricingTier'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_4'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIERED_BUNDLE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_TIER_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY_COUNT_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_MODE_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERWRITTEN'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('billableEntityCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('bundleInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricingMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReason'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bundleNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('pricingTier'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIER_4'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIERED_BUNDLE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_TIER_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY_COUNT_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRICING_MODE_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERWRITTEN'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateScene(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('updateDateTime'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}