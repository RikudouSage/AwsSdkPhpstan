<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTSiteWiseClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTSiteWise\IoTSiteWiseClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTSiteWise\IoTSiteWiseClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAssets',
            'associateTimeSeriesToAssetProperty',
            'batchAssociateProjectAssets',
            'batchDisassociateProjectAssets',
            'batchGetAssetPropertyAggregates',
            'batchGetAssetPropertyValue',
            'batchGetAssetPropertyValueHistory',
            'batchPutAssetPropertyValue',
            'createAccessPolicy',
            'createAsset',
            'createAssetModel',
            'createAssetModelCompositeModel',
            'createBulkImportJob',
            'createDashboard',
            'createDataset',
            'createGateway',
            'createPortal',
            'createProject',
            'deleteAccessPolicy',
            'deleteAsset',
            'deleteAssetModel',
            'deleteAssetModelCompositeModel',
            'deleteDashboard',
            'deleteDataset',
            'deleteGateway',
            'deletePortal',
            'deleteProject',
            'deleteTimeSeries',
            'describeAccessPolicy',
            'describeAction',
            'describeAsset',
            'describeAssetCompositeModel',
            'describeAssetModel',
            'describeAssetModelCompositeModel',
            'describeAssetProperty',
            'describeBulkImportJob',
            'describeDashboard',
            'describeDataset',
            'describeDefaultEncryptionConfiguration',
            'describeGateway',
            'describeGatewayCapabilityConfiguration',
            'describeLoggingOptions',
            'describePortal',
            'describeProject',
            'describeStorageConfiguration',
            'describeTimeSeries',
            'disassociateAssets',
            'disassociateTimeSeriesFromAssetProperty',
            'executeAction',
            'executeQuery',
            'getAssetPropertyAggregates',
            'getAssetPropertyValue',
            'getAssetPropertyValueHistory',
            'getInterpolatedAssetPropertyValues',
            'invokeAssistant',
            'listAccessPolicies',
            'listActions',
            'listAssetModelCompositeModels',
            'listAssetModelProperties',
            'listAssetModels',
            'listAssetProperties',
            'listAssetRelationships',
            'listAssets',
            'listAssociatedAssets',
            'listBulkImportJobs',
            'listCompositionRelationships',
            'listDashboards',
            'listDatasets',
            'listGateways',
            'listPortals',
            'listProjectAssets',
            'listProjects',
            'listTagsForResource',
            'listTimeSeries',
            'putDefaultEncryptionConfiguration',
            'putLoggingOptions',
            'putStorageConfiguration',
            'tagResource',
            'untagResource',
            'updateAccessPolicy',
            'updateAsset',
            'updateAssetModel',
            'updateAssetModelCompositeModel',
            'updateAssetProperty',
            'updateDashboard',
            'updateDataset',
            'updateGateway',
            'updateGatewayCapabilityConfiguration',
            'updatePortal',
            'updateProject',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAssets' => $this->associateAssets(),
            'associateTimeSeriesToAssetProperty' => $this->associateTimeSeriesToAssetProperty(),
            'batchAssociateProjectAssets' => $this->batchAssociateProjectAssets(),
            'batchDisassociateProjectAssets' => $this->batchDisassociateProjectAssets(),
            'batchGetAssetPropertyAggregates' => $this->batchGetAssetPropertyAggregates(),
            'batchGetAssetPropertyValue' => $this->batchGetAssetPropertyValue(),
            'batchGetAssetPropertyValueHistory' => $this->batchGetAssetPropertyValueHistory(),
            'batchPutAssetPropertyValue' => $this->batchPutAssetPropertyValue(),
            'createAccessPolicy' => $this->createAccessPolicy(),
            'createAsset' => $this->createAsset(),
            'createAssetModel' => $this->createAssetModel(),
            'createAssetModelCompositeModel' => $this->createAssetModelCompositeModel(),
            'createBulkImportJob' => $this->createBulkImportJob(),
            'createDashboard' => $this->createDashboard(),
            'createDataset' => $this->createDataset(),
            'createGateway' => $this->createGateway(),
            'createPortal' => $this->createPortal(),
            'createProject' => $this->createProject(),
            'deleteAccessPolicy' => $this->deleteAccessPolicy(),
            'deleteAsset' => $this->deleteAsset(),
            'deleteAssetModel' => $this->deleteAssetModel(),
            'deleteAssetModelCompositeModel' => $this->deleteAssetModelCompositeModel(),
            'deleteDashboard' => $this->deleteDashboard(),
            'deleteDataset' => $this->deleteDataset(),
            'deleteGateway' => $this->deleteGateway(),
            'deletePortal' => $this->deletePortal(),
            'deleteProject' => $this->deleteProject(),
            'deleteTimeSeries' => $this->deleteTimeSeries(),
            'describeAccessPolicy' => $this->describeAccessPolicy(),
            'describeAction' => $this->describeAction(),
            'describeAsset' => $this->describeAsset(),
            'describeAssetCompositeModel' => $this->describeAssetCompositeModel(),
            'describeAssetModel' => $this->describeAssetModel(),
            'describeAssetModelCompositeModel' => $this->describeAssetModelCompositeModel(),
            'describeAssetProperty' => $this->describeAssetProperty(),
            'describeBulkImportJob' => $this->describeBulkImportJob(),
            'describeDashboard' => $this->describeDashboard(),
            'describeDataset' => $this->describeDataset(),
            'describeDefaultEncryptionConfiguration' => $this->describeDefaultEncryptionConfiguration(),
            'describeGateway' => $this->describeGateway(),
            'describeGatewayCapabilityConfiguration' => $this->describeGatewayCapabilityConfiguration(),
            'describeLoggingOptions' => $this->describeLoggingOptions(),
            'describePortal' => $this->describePortal(),
            'describeProject' => $this->describeProject(),
            'describeStorageConfiguration' => $this->describeStorageConfiguration(),
            'describeTimeSeries' => $this->describeTimeSeries(),
            'disassociateAssets' => $this->disassociateAssets(),
            'disassociateTimeSeriesFromAssetProperty' => $this->disassociateTimeSeriesFromAssetProperty(),
            'executeAction' => $this->executeAction(),
            'executeQuery' => $this->executeQuery(),
            'getAssetPropertyAggregates' => $this->getAssetPropertyAggregates(),
            'getAssetPropertyValue' => $this->getAssetPropertyValue(),
            'getAssetPropertyValueHistory' => $this->getAssetPropertyValueHistory(),
            'getInterpolatedAssetPropertyValues' => $this->getInterpolatedAssetPropertyValues(),
            'invokeAssistant' => $this->invokeAssistant(),
            'listAccessPolicies' => $this->listAccessPolicies(),
            'listActions' => $this->listActions(),
            'listAssetModelCompositeModels' => $this->listAssetModelCompositeModels(),
            'listAssetModelProperties' => $this->listAssetModelProperties(),
            'listAssetModels' => $this->listAssetModels(),
            'listAssetProperties' => $this->listAssetProperties(),
            'listAssetRelationships' => $this->listAssetRelationships(),
            'listAssets' => $this->listAssets(),
            'listAssociatedAssets' => $this->listAssociatedAssets(),
            'listBulkImportJobs' => $this->listBulkImportJobs(),
            'listCompositionRelationships' => $this->listCompositionRelationships(),
            'listDashboards' => $this->listDashboards(),
            'listDatasets' => $this->listDatasets(),
            'listGateways' => $this->listGateways(),
            'listPortals' => $this->listPortals(),
            'listProjectAssets' => $this->listProjectAssets(),
            'listProjects' => $this->listProjects(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTimeSeries' => $this->listTimeSeries(),
            'putDefaultEncryptionConfiguration' => $this->putDefaultEncryptionConfiguration(),
            'putLoggingOptions' => $this->putLoggingOptions(),
            'putStorageConfiguration' => $this->putStorageConfiguration(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccessPolicy' => $this->updateAccessPolicy(),
            'updateAsset' => $this->updateAsset(),
            'updateAssetModel' => $this->updateAssetModel(),
            'updateAssetModelCompositeModel' => $this->updateAssetModelCompositeModel(),
            'updateAssetProperty' => $this->updateAssetProperty(),
            'updateDashboard' => $this->updateDashboard(),
            'updateDataset' => $this->updateDataset(),
            'updateGateway' => $this->updateGateway(),
            'updateGatewayCapabilityConfiguration' => $this->updateGatewayCapabilityConfiguration(),
            'updatePortal' => $this->updatePortal(),
            'updateProject' => $this->updateProject(),
        };
    }
    private function associateAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateTimeSeriesToAssetProperty(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchAssociateProjectAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchDisassociateProjectAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetAssetPropertyAggregates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('successEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('skippedEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregatedValues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('quality'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GOOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNCERTAIN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('average'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('standardDeviation'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('completionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchGetAssetPropertyValue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('successEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('skippedEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetPropertyValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('quality'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('nullValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('valueType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('D'),
                                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                                    new \PHPStan\Type\Constant\ConstantStringType('I'),
                                    new \PHPStan\Type\Constant\ConstantStringType('U'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GOOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNCERTAIN'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('completionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchGetAssetPropertyValueHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('successEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('skippedEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetPropertyValueHistory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('quality'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('nullValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('valueType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('D'),
                                    new \PHPStan\Type\Constant\ConstantStringType('B'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                                    new \PHPStan\Type\Constant\ConstantStringType('I'),
                                    new \PHPStan\Type\Constant\ConstantStringType('U'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GOOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNCERTAIN'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('completionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchPutAssetPropertyValue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamps'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                            new \PHPStan\Type\Constant\ConstantStringType('LimitExceededException'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictingOperationException'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimestampOutOfRangeException'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ])),
                ])),
            ]),
        ]);
    }
    private function createAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('assetStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createAssetModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createAssetModelCompositeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelPath'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createBulkImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_FAILURES'),
                ]),
            ]),
        ]);
    }
    private function createDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dashboardId'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('gatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalId'),
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalStartUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('portalStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ssoApplicationId'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('projectArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAssetModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAssetModelCompositeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTimeSeries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyResource'),
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyPermission'),
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicyLastUpdateDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('portal'),
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ADMINISTRATOR'),
                    new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                new \PHPStan\Type\Constant\ConstantStringType('targetResource'),
                new \PHPStan\Type\Constant\ConstantStringType('actionDefinitionId'),
                new \PHPStan\Type\Constant\ConstantStringType('actionPayload'),
                new \PHPStan\Type\Constant\ConstantStringType('executionTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('assetName'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('assetHierarchies'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModels'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('assetLastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('assetStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('assetDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('assetExternalId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('notification'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('notification'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('topic'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAssetCompositeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelExternalId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelPath'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelType'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('actionDefinitions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('notification'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionDefinitionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeAssetModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelExternalId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelType'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelHierarchies'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModels'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelLastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('eTag'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSET_MODEL'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPONENT_MODEL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('measurement'),
                        new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('window'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tumbling'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('offset'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('childAssetModelId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('measurement'),
                            new \PHPStan\Type\Constant\ConstantStringType('transform'),
                            new \PHPStan\Type\Constant\ConstantStringType('metric'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                                new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                                new \PHPStan\Type\Constant\ConstantStringType('window'),
                                new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tumbling'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                        new \PHPStan\Type\Constant\ConstantStringType('offset'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAssetModelCompositeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelExternalId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelPath'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelType'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('compositionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('actionDefinitions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('measurement'),
                        new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('window'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tumbling'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('offset'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('compositionRelationship'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionDefinitionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeAssetProperty(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetName'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetProperty'),
                new \PHPStan\Type\Constant\ConstantStringType('compositeModel'),
                new \PHPStan\Type\Constant\ConstantStringType('assetExternalId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('notification'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('measurement'),
                        new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('window'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tumbling'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('offset'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetProperty'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('notification'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('topic'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('measurement'),
                            new \PHPStan\Type\Constant\ConstantStringType('transform'),
                            new \PHPStan\Type\Constant\ConstantStringType('metric'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                                new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                                new \PHPStan\Type\Constant\ConstantStringType('window'),
                                new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tumbling'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                        new \PHPStan\Type\Constant\ConstantStringType('offset'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBulkImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('jobRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('files'),
                new \PHPStan\Type\Constant\ConstantStringType('errorReportLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('jobConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('jobCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('jobLastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('adaptiveIngestion'),
                new \PHPStan\Type\Constant\ConstantStringType('deleteFilesAfterImport'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_FAILURES'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fileFormat'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('csv'),
                        new \PHPStan\Type\Constant\ConstantStringType('parquet'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('columnNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALIAS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASSET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROPERTY_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATA_TYPE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_SECONDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_NANO_OFFSET'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function describeDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dashboardId'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardName'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardLastUpdateDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetSource'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetLastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceDetail'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kendra'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDefaultEncryptionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configurationStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_DEFAULT_ENCRYPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMS_BASED_ENCRYPTION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('gatewayName'),
                new \PHPStan\Type\Constant\ConstantStringType('gatewayArn'),
                new \PHPStan\Type\Constant\ConstantStringType('gatewayPlatform'),
                new \PHPStan\Type\Constant\ConstantStringType('gatewayVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('gatewayCapabilitySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('greengrass'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('siemensIE'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('coreDeviceThingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('coreDeviceOperatingSystem'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_AARCH64'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_AMD64'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_AMD64'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('iotCoreThingName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('capabilityNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('capabilitySyncStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeGatewayCapabilityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('capabilityNamespace'),
                new \PHPStan\Type\Constant\ConstantStringType('capabilityConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('capabilitySyncStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SYNC'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                ]),
            ]),
        ]);
    }
    private function describeLoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('loggingOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('level'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describePortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalId'),
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalName'),
                new \PHPStan\Type\Constant\ConstantStringType('portalDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('portalClientId'),
                new \PHPStan\Type\Constant\ConstantStringType('portalStartUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('portalContactEmail'),
                new \PHPStan\Type\Constant\ConstantStringType('portalStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('portalCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('portalLastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('portalLogoImageLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalAuthMode'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationSenderEmail'),
                new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                new \PHPStan\Type\Constant\ConstantStringType('portalType'),
                new \PHPStan\Type\Constant\ConstantStringType('portalTypeConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSO'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('alarmRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationLambdaArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_PORTAL_V1'),
                    new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_PORTAL_V2'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('portalTools'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function describeProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('projectArn'),
                new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                new \PHPStan\Type\Constant\ConstantStringType('portalId'),
                new \PHPStan\Type\Constant\ConstantStringType('projectDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('projectCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('projectLastUpdateDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeStorageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('storageType'),
                new \PHPStan\Type\Constant\ConstantStringType('multiLayerStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('disassociatedDataStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('retentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('configurationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('warmTier'),
                new \PHPStan\Type\Constant\ConstantStringType('warmTierRetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('disallowIngestNullNaN'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_DEFAULT_STORAGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI_LAYER_STORAGE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedS3Storage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlimited'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlimited'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function describeTimeSeries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                new \PHPStan\Type\Constant\ConstantStringType('alias'),
                new \PHPStan\Type\Constant\ConstantStringType('timeSeriesId'),
                new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                new \PHPStan\Type\Constant\ConstantStringType('timeSeriesCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('timeSeriesLastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('timeSeriesArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateTimeSeriesFromAssetProperty(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function executeAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('columns'),
                new \PHPStan\Type\Constant\ConstantStringType('rows'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scalarType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scalarValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('arrayValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('rowValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('nullValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\MixedType(),
                        new \PHPStan\Type\MixedType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAssetPropertyAggregates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aggregatedValues'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('quality'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GOOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCERTAIN'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('average'),
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                        new \PHPStan\Type\Constant\ConstantStringType('sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('standardDeviation'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAssetPropertyValue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('propertyValue'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('quality'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('nullValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('valueType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('D'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('I'),
                                new \PHPStan\Type\Constant\ConstantStringType('U'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GOOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCERTAIN'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAssetPropertyValueHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetPropertyValueHistory'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('quality'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('nullValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('valueType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('D'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('I'),
                                new \PHPStan\Type\Constant\ConstantStringType('U'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GOOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCERTAIN'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInterpolatedAssetPropertyValues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('interpolatedAssetPropertyValues'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('nullValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('valueType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('D'),
                                new \PHPStan\Type\Constant\ConstantStringType('B'),
                                new \PHPStan\Type\Constant\ConstantStringType('S'),
                                new \PHPStan\Type\Constant\ConstantStringType('I'),
                                new \PHPStan\Type\Constant\ConstantStringType('U'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function invokeAssistant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('body'),
                new \PHPStan\Type\Constant\ConstantStringType('conversationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('trace'),
                    new \PHPStan\Type\Constant\ConstantStringType('output'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessDeniedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('conflictingOperationException'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalFailureException'),
                    new \PHPStan\Type\Constant\ConstantStringType('invalidRequestException'),
                    new \PHPStan\Type\Constant\ConstantStringType('limitExceededException'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceNotFoundException'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('citations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reference'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dataset'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('datasetArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccessPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('identity'),
                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('permission'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('portal'),
                        new \PHPStan\Type\Constant\ConstantStringType('project'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADMINISTRATOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionDefinitionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResource'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssetModelCompositeModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssetModelProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelPropertySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('measurement'),
                        new \PHPStan\Type\Constant\ConstantStringType('transform'),
                        new \PHPStan\Type\Constant\ConstantStringType('metric'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('forwardingConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('variables'),
                            new \PHPStan\Type\Constant\ConstantStringType('window'),
                            new \PHPStan\Type\Constant\ConstantStringType('processingConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propertyPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tumbling'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('offset'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('computeLocation'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssetModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetModelType'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSET_MODEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPONENT_MODEL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssetProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetPropertySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('notification'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetCompositeModelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topic'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssetRelationships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetRelationshipSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('hierarchyInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('parentAssetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('childAssetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('HIERARCHY'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('hierarchies'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociatedAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('hierarchies'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBulkImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_FAILURES'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCompositionRelationships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('compositionRelationshipSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetModelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDashboards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dashboardSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                ], [
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
    private function listDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewaySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayPlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayCapabilitySummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('greengrass'),
                        new \PHPStan\Type\Constant\ConstantStringType('greengrassV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('siemensIE'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('coreDeviceThingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('coreDeviceOperatingSystem'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_AARCH64'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_AMD64'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_AMD64'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('iotCoreThingName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capabilityNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('capabilitySyncStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPortals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('startUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_PORTAL_V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_PORTAL_V2'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjectAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('projectSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDate'),
                ], [
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
    private function listTimeSeries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeSeriesId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTypeSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeSeriesCreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeSeriesLastUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeSeriesArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putDefaultEncryptionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configurationStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_DEFAULT_ENCRYPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMS_BASED_ENCRYPTION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putLoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putStorageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('storageType'),
                new \PHPStan\Type\Constant\ConstantStringType('multiLayerStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('disassociatedDataStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('retentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('configurationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('warmTier'),
                new \PHPStan\Type\Constant\ConstantStringType('warmTierRetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('disallowIngestNullNaN'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SITEWISE_DEFAULT_STORAGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI_LAYER_STORAGE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedS3Storage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlimited'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlimited'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
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
    private function updateAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAssetModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAssetModelCompositeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetModelCompositeModelPath'),
                new \PHPStan\Type\Constant\ConstantStringType('assetModelStatus'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROPAGATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAssetProperty(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_COMPUTE_LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_FORWARDING_CONFIGURATION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateGatewayCapabilityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('capabilityNamespace'),
                new \PHPStan\Type\Constant\ConstantStringType('capabilitySyncStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_SYNC'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                ]),
            ]),
        ]);
    }
    private function updatePortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}