<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTFleetWiseClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTFleetWise\IoTFleetWiseClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTFleetWise\IoTFleetWiseClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateVehicleFleet',
            'batchCreateVehicle',
            'batchUpdateVehicle',
            'createCampaign',
            'createDecoderManifest',
            'createFleet',
            'createModelManifest',
            'createSignalCatalog',
            'createStateTemplate',
            'createVehicle',
            'deleteCampaign',
            'deleteDecoderManifest',
            'deleteFleet',
            'deleteModelManifest',
            'deleteSignalCatalog',
            'deleteStateTemplate',
            'deleteVehicle',
            'disassociateVehicleFleet',
            'getCampaign',
            'getDecoderManifest',
            'getEncryptionConfiguration',
            'getFleet',
            'getLoggingOptions',
            'getModelManifest',
            'getRegisterAccountStatus',
            'getSignalCatalog',
            'getStateTemplate',
            'getVehicle',
            'getVehicleStatus',
            'importDecoderManifest',
            'importSignalCatalog',
            'listCampaigns',
            'listDecoderManifestNetworkInterfaces',
            'listDecoderManifestSignals',
            'listDecoderManifests',
            'listFleets',
            'listFleetsForVehicle',
            'listModelManifestNodes',
            'listModelManifests',
            'listSignalCatalogNodes',
            'listSignalCatalogs',
            'listStateTemplates',
            'listTagsForResource',
            'listVehicles',
            'listVehiclesInFleet',
            'putEncryptionConfiguration',
            'putLoggingOptions',
            'registerAccount',
            'tagResource',
            'untagResource',
            'updateCampaign',
            'updateDecoderManifest',
            'updateFleet',
            'updateModelManifest',
            'updateSignalCatalog',
            'updateStateTemplate',
            'updateVehicle',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateVehicleFleet' => $this->associateVehicleFleet(),
            'batchCreateVehicle' => $this->batchCreateVehicle(),
            'batchUpdateVehicle' => $this->batchUpdateVehicle(),
            'createCampaign' => $this->createCampaign(),
            'createDecoderManifest' => $this->createDecoderManifest(),
            'createFleet' => $this->createFleet(),
            'createModelManifest' => $this->createModelManifest(),
            'createSignalCatalog' => $this->createSignalCatalog(),
            'createStateTemplate' => $this->createStateTemplate(),
            'createVehicle' => $this->createVehicle(),
            'deleteCampaign' => $this->deleteCampaign(),
            'deleteDecoderManifest' => $this->deleteDecoderManifest(),
            'deleteFleet' => $this->deleteFleet(),
            'deleteModelManifest' => $this->deleteModelManifest(),
            'deleteSignalCatalog' => $this->deleteSignalCatalog(),
            'deleteStateTemplate' => $this->deleteStateTemplate(),
            'deleteVehicle' => $this->deleteVehicle(),
            'disassociateVehicleFleet' => $this->disassociateVehicleFleet(),
            'getCampaign' => $this->getCampaign(),
            'getDecoderManifest' => $this->getDecoderManifest(),
            'getEncryptionConfiguration' => $this->getEncryptionConfiguration(),
            'getFleet' => $this->getFleet(),
            'getLoggingOptions' => $this->getLoggingOptions(),
            'getModelManifest' => $this->getModelManifest(),
            'getRegisterAccountStatus' => $this->getRegisterAccountStatus(),
            'getSignalCatalog' => $this->getSignalCatalog(),
            'getStateTemplate' => $this->getStateTemplate(),
            'getVehicle' => $this->getVehicle(),
            'getVehicleStatus' => $this->getVehicleStatus(),
            'importDecoderManifest' => $this->importDecoderManifest(),
            'importSignalCatalog' => $this->importSignalCatalog(),
            'listCampaigns' => $this->listCampaigns(),
            'listDecoderManifestNetworkInterfaces' => $this->listDecoderManifestNetworkInterfaces(),
            'listDecoderManifestSignals' => $this->listDecoderManifestSignals(),
            'listDecoderManifests' => $this->listDecoderManifests(),
            'listFleets' => $this->listFleets(),
            'listFleetsForVehicle' => $this->listFleetsForVehicle(),
            'listModelManifestNodes' => $this->listModelManifestNodes(),
            'listModelManifests' => $this->listModelManifests(),
            'listSignalCatalogNodes' => $this->listSignalCatalogNodes(),
            'listSignalCatalogs' => $this->listSignalCatalogs(),
            'listStateTemplates' => $this->listStateTemplates(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVehicles' => $this->listVehicles(),
            'listVehiclesInFleet' => $this->listVehiclesInFleet(),
            'putEncryptionConfiguration' => $this->putEncryptionConfiguration(),
            'putLoggingOptions' => $this->putLoggingOptions(),
            'registerAccount' => $this->registerAccount(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCampaign' => $this->updateCampaign(),
            'updateDecoderManifest' => $this->updateDecoderManifest(),
            'updateFleet' => $this->updateFleet(),
            'updateModelManifest' => $this->updateModelManifest(),
            'updateSignalCatalog' => $this->updateSignalCatalog(),
            'updateStateTemplate' => $this->updateStateTemplate(),
            'updateVehicle' => $this->updateVehicle(),
        };
    }
    private function associateVehicleFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchCreateVehicle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicles'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchUpdateVehicle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicles'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDecoderManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createModelManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSignalCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createVehicle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDecoderManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteModelManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSignalCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteStateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteVehicle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateVehicleFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('expiryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('postTriggerCollectionDuration'),
                new \PHPStan\Type\Constant\ConstantStringType('diagnosticsMode'),
                new \PHPStan\Type\Constant\ConstantStringType('spoolingMode'),
                new \PHPStan\Type\Constant\ConstantStringType('compression'),
                new \PHPStan\Type\Constant\ConstantStringType('priority'),
                new \PHPStan\Type\Constant\ConstantStringType('signalsToCollect'),
                new \PHPStan\Type\Constant\ConstantStringType('collectionScheme'),
                new \PHPStan\Type\Constant\ConstantStringType('dataExtraDimensions'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('dataDestinationConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPartitions'),
                new \PHPStan\Type\Constant\ConstantStringType('signalsToFetch'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_APPROVAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    new \PHPStan\Type\Constant\ConstantStringType('SEND_ACTIVE_DTCS'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    new \PHPStan\Type\Constant\ConstantStringType('TO_DISK'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxSampleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumSamplingIntervalMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataPartitionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timeBasedCollectionScheme'),
                    new \PHPStan\Type\Constant\ConstantStringType('conditionBasedCollectionScheme'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('periodMs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumTriggerIntervalMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('triggerMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('conditionLanguageVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALWAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RISING_EDGE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Config'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestreamConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('mqttTopicConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageCompressionFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timestreamTableArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mqttTopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maximumSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('minimumTimeToLive'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TB'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('conditionLanguageVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalFetchConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('conditionLanguageVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeBased'),
                            new \PHPStan\Type\Constant\ConstantStringType('conditionBased'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('executionFrequencyMs'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditionExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('triggerMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALWAYS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RISING_EDGE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDecoderManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('modelManifestArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEncryptionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMS_BASED_ENCRYPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FLEETWISE_DEFAULT_ENCRYPTION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getLoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogDelivery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('logType'),
                    new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getModelManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getRegisterAccountStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('customerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('accountStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('timestreamRegistrationResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRegistrationResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILURE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timestreamDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestreamTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestreamDatabaseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestreamTableArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILURE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILURE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getSignalCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('nodeCounts'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalBranches'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalSensors'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalActuators'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalStructs'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalProperties'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getStateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                new \PHPStan\Type\Constant\ConstantStringType('stateTemplateProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('dataExtraDimensions'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataExtraDimensions'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getVehicle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('modelManifestArn'),
                new \PHPStan\Type\Constant\ConstantStringType('decoderManifestArn'),
                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('stateTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateTemplateUpdateStrategy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('periodic'),
                            new \PHPStan\Type\Constant\ConstantStringType('onChange'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stateTemplateUpdateRate'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getVehicleStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('campaigns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('campaignName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importDecoderManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importSignalCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCampaigns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('campaignSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_APPROVAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDecoderManifestNetworkInterfaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('interfaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('canInterface'),
                        new \PHPStan\Type\Constant\ConstantStringType('obdInterface'),
                        new \PHPStan\Type\Constant\ConstantStringType('vehicleMiddleware'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDecodingInterface'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_INTERFACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OBD_INTERFACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_MIDDLEWARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_DECODING_INTERFACE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocolName'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocolVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('requestMessageId'),
                            new \PHPStan\Type\Constant\ConstantStringType('obdStandard'),
                            new \PHPStan\Type\Constant\ConstantStringType('pidRequestIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('dtcRequestIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('useExtendedIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('hasTransmissionEcu'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocolName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('ROS_2'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDecoderManifestSignals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('signalDecoders'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('interfaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('canSignal'),
                        new \PHPStan\Type\Constant\ConstantStringType('obdSignal'),
                        new \PHPStan\Type\Constant\ConstantStringType('messageSignal'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDecodingSignal'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAN_SIGNAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OBD_SIGNAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_SIGNAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_DECODING_SIGNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                            new \PHPStan\Type\Constant\ConstantStringType('isBigEndian'),
                            new \PHPStan\Type\Constant\ConstantStringType('isSigned'),
                            new \PHPStan\Type\Constant\ConstantStringType('startBit'),
                            new \PHPStan\Type\Constant\ConstantStringType('offset'),
                            new \PHPStan\Type\Constant\ConstantStringType('factor'),
                            new \PHPStan\Type\Constant\ConstantStringType('length'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('signalValueType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOATING_POINT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pidResponseLength'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('pid'),
                            new \PHPStan\Type\Constant\ConstantStringType('scaling'),
                            new \PHPStan\Type\Constant\ConstantStringType('offset'),
                            new \PHPStan\Type\Constant\ConstantStringType('startByte'),
                            new \PHPStan\Type\Constant\ConstantStringType('byteLength'),
                            new \PHPStan\Type\Constant\ConstantStringType('bitRightShift'),
                            new \PHPStan\Type\Constant\ConstantStringType('bitMaskLength'),
                            new \PHPStan\Type\Constant\ConstantStringType('isSigned'),
                            new \PHPStan\Type\Constant\ConstantStringType('signalValueType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOATING_POINT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('topicName'),
                            new \PHPStan\Type\Constant\ConstantStringType('structuredMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('primitiveMessageDefinition'),
                                new \PHPStan\Type\Constant\ConstantStringType('structuredMessageListDefinition'),
                                new \PHPStan\Type\Constant\ConstantStringType('structuredMessageDefinition'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ros2PrimitiveMessageDefinition'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('primitiveType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('offset'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scaling'),
                                        new \PHPStan\Type\Constant\ConstantStringType('upperBound'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BYTE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT64'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WSTRING'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('memberType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('listType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('capacity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\MixedType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FIXED_CAPACITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_UNBOUNDED_CAPACITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_BOUNDED_CAPACITY'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\MixedType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDecoderManifests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelManifestArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFleets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleetSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFleetsForVehicle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listModelManifestNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('sensor'),
                        new \PHPStan\Type\Constant\ConstantStringType('actuator'),
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('struct'),
                        new \PHPStan\Type\Constant\ConstantStringType('property'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('min'),
                            new \PHPStan\Type\Constant\ConstantStringType('max'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('structFullyQualifiedName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('min'),
                            new \PHPStan\Type\Constant\ConstantStringType('max'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignedValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('structFullyQualifiedName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('min'),
                            new \PHPStan\Type\Constant\ConstantStringType('max'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignedValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataEncoding'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('structFullyQualifiedName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TYPED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listModelManifests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSignalCatalogNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('sensor'),
                        new \PHPStan\Type\Constant\ConstantStringType('actuator'),
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('struct'),
                        new \PHPStan\Type\Constant\ConstantStringType('property'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('min'),
                            new \PHPStan\Type\Constant\ConstantStringType('max'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('structFullyQualifiedName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('min'),
                            new \PHPStan\Type\Constant\ConstantStringType('max'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignedValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('structFullyQualifiedName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('min'),
                            new \PHPStan\Type\Constant\ConstantStringType('max'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignedValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullyQualifiedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataEncoding'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('deprecationMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('structFullyQualifiedName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT8_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT16_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT32_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UINT64_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNIX_TIMESTAMP_ARRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRUCT_ARRAY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TYPED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSignalCatalogs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStateTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalCatalogArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
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
            ]),
        ]);
    }
    private function listVehicles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicleSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelManifestArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('decoderManifestArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVehiclesInFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicles'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putEncryptionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMS_BASED_ENCRYPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FLEETWISE_DEFAULT_ENCRYPTION'),
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
    private function registerAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registerAccountStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('timestreamResources'),
                new \PHPStan\Type\Constant\ConstantStringType('iamResources'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModificationTime'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILURE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timestreamDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestreamTableName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_APPROVAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                ]),
            ]),
        ]);
    }
    private function updateDecoderManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateModelManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSignalCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateVehicle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vehicleName'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}