<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTManagedIntegrationsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTManagedIntegrations\IoTManagedIntegrationsClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTManagedIntegrations\IoTManagedIntegrationsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCredentialLocker',
            'createDestination',
            'createEventLogConfiguration',
            'createManagedThing',
            'createNotificationConfiguration',
            'createOtaTask',
            'createOtaTaskConfiguration',
            'createProvisioningProfile',
            'deleteCredentialLocker',
            'deleteDestination',
            'deleteEventLogConfiguration',
            'deleteManagedThing',
            'deleteNotificationConfiguration',
            'deleteOtaTask',
            'deleteOtaTaskConfiguration',
            'deleteProvisioningProfile',
            'getCredentialLocker',
            'getCustomEndpoint',
            'getDefaultEncryptionConfiguration',
            'getDestination',
            'getDeviceDiscovery',
            'getEventLogConfiguration',
            'getHubConfiguration',
            'getManagedThing',
            'getManagedThingCapabilities',
            'getManagedThingConnectivityData',
            'getManagedThingMetaData',
            'getManagedThingState',
            'getNotificationConfiguration',
            'getOtaTask',
            'getOtaTaskConfiguration',
            'getProvisioningProfile',
            'getRuntimeLogConfiguration',
            'getSchemaVersion',
            'listCredentialLockers',
            'listDestinations',
            'listEventLogConfigurations',
            'listManagedThingSchemas',
            'listManagedThings',
            'listNotificationConfigurations',
            'listOtaTaskConfigurations',
            'listOtaTaskExecutions',
            'listOtaTasks',
            'listProvisioningProfiles',
            'listSchemaVersions',
            'putDefaultEncryptionConfiguration',
            'putHubConfiguration',
            'putRuntimeLogConfiguration',
            'registerCustomEndpoint',
            'resetRuntimeLogConfiguration',
            'sendManagedThingCommand',
            'startDeviceDiscovery',
            'updateDestination',
            'updateEventLogConfiguration',
            'updateManagedThing',
            'updateNotificationConfiguration',
            'updateOtaTask',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCredentialLocker' => $this->createCredentialLocker(),
            'createDestination' => $this->createDestination(),
            'createEventLogConfiguration' => $this->createEventLogConfiguration(),
            'createManagedThing' => $this->createManagedThing(),
            'createNotificationConfiguration' => $this->createNotificationConfiguration(),
            'createOtaTask' => $this->createOtaTask(),
            'createOtaTaskConfiguration' => $this->createOtaTaskConfiguration(),
            'createProvisioningProfile' => $this->createProvisioningProfile(),
            'deleteCredentialLocker' => $this->deleteCredentialLocker(),
            'deleteDestination' => $this->deleteDestination(),
            'deleteEventLogConfiguration' => $this->deleteEventLogConfiguration(),
            'deleteManagedThing' => $this->deleteManagedThing(),
            'deleteNotificationConfiguration' => $this->deleteNotificationConfiguration(),
            'deleteOtaTask' => $this->deleteOtaTask(),
            'deleteOtaTaskConfiguration' => $this->deleteOtaTaskConfiguration(),
            'deleteProvisioningProfile' => $this->deleteProvisioningProfile(),
            'getCredentialLocker' => $this->getCredentialLocker(),
            'getCustomEndpoint' => $this->getCustomEndpoint(),
            'getDefaultEncryptionConfiguration' => $this->getDefaultEncryptionConfiguration(),
            'getDestination' => $this->getDestination(),
            'getDeviceDiscovery' => $this->getDeviceDiscovery(),
            'getEventLogConfiguration' => $this->getEventLogConfiguration(),
            'getHubConfiguration' => $this->getHubConfiguration(),
            'getManagedThing' => $this->getManagedThing(),
            'getManagedThingCapabilities' => $this->getManagedThingCapabilities(),
            'getManagedThingConnectivityData' => $this->getManagedThingConnectivityData(),
            'getManagedThingMetaData' => $this->getManagedThingMetaData(),
            'getManagedThingState' => $this->getManagedThingState(),
            'getNotificationConfiguration' => $this->getNotificationConfiguration(),
            'getOtaTask' => $this->getOtaTask(),
            'getOtaTaskConfiguration' => $this->getOtaTaskConfiguration(),
            'getProvisioningProfile' => $this->getProvisioningProfile(),
            'getRuntimeLogConfiguration' => $this->getRuntimeLogConfiguration(),
            'getSchemaVersion' => $this->getSchemaVersion(),
            'listCredentialLockers' => $this->listCredentialLockers(),
            'listDestinations' => $this->listDestinations(),
            'listEventLogConfigurations' => $this->listEventLogConfigurations(),
            'listManagedThingSchemas' => $this->listManagedThingSchemas(),
            'listManagedThings' => $this->listManagedThings(),
            'listNotificationConfigurations' => $this->listNotificationConfigurations(),
            'listOtaTaskConfigurations' => $this->listOtaTaskConfigurations(),
            'listOtaTaskExecutions' => $this->listOtaTaskExecutions(),
            'listOtaTasks' => $this->listOtaTasks(),
            'listProvisioningProfiles' => $this->listProvisioningProfiles(),
            'listSchemaVersions' => $this->listSchemaVersions(),
            'putDefaultEncryptionConfiguration' => $this->putDefaultEncryptionConfiguration(),
            'putHubConfiguration' => $this->putHubConfiguration(),
            'putRuntimeLogConfiguration' => $this->putRuntimeLogConfiguration(),
            'registerCustomEndpoint' => $this->registerCustomEndpoint(),
            'resetRuntimeLogConfiguration' => $this->resetRuntimeLogConfiguration(),
            'sendManagedThingCommand' => $this->sendManagedThingCommand(),
            'startDeviceDiscovery' => $this->startDeviceDiscovery(),
            'updateDestination' => $this->updateDestination(),
            'updateEventLogConfiguration' => $this->updateEventLogConfiguration(),
            'updateManagedThing' => $this->updateManagedThing(),
            'updateNotificationConfiguration' => $this->updateNotificationConfiguration(),
            'updateOtaTask' => $this->updateOtaTask(),
        };
    }
    private function createCredentialLocker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEventLogConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createManagedThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventType'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_COMMAND'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_COMMAND_REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_EVENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_LIFE_CYCLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_STATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_OTA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_ASSOCIATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_ERROR_REPORT'),
                ]),
            ]),
        ]);
    }
    private function createOtaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createOtaTaskConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskConfigurationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProvisioningProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningType'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ClaimCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('ClaimCertificatePrivateKey'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FLEET_PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('JITR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteCredentialLocker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEventLogConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteManagedThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteOtaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteOtaTaskConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProvisioningProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getCredentialLocker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getCustomEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointAddress'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDefaultEncryptionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED_INTEGRATIONS_DEFAULT_ENCRYPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KEY_ENCRYPTION'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryDestinationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryDestinationType'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDeviceDiscovery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('DiscoveryType'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ControllerId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectorAssociationId'),
                new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ZWAVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZIGBEE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getEventLogConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('EventLogLevel'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                ]),
            ]),
        ]);
    }
    private function getHubConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HubTokenTimerExpirySettingInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getManagedThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                new \PHPStan\Type\Constant\ConstantStringType('CredentialLockerId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvertisedProductId'),
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Model'),
                new \PHPStan\Type\Constant\ConstantStringType('Brand'),
                new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('UniversalProductCode'),
                new \PHPStan\Type\Constant\ConstantStringType('InternationalArticleNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectorPolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectorDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceSpecificKey'),
                new \PHPStan\Type\Constant\ConstantStringType('MacAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentControllerId'),
                new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ActivatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('HubNetworkMode'),
                new \PHPStan\Type\Constant\ConstantStringType('MetaData'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONTROLLER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UNASSOCIATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_ASSOCIATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ISOLATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_WIDE_EXCLUSION'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getManagedThingCapabilities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedThingId'),
                new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('CapabilityReport'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceTypes'),
                            new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                                ], [
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
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getManagedThingConnectivityData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedThingId'),
                new \PHPStan\Type\Constant\ConstantStringType('Connected'),
                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('DisconnectReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AUTH_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_INITIATED_DISCONNECT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_CLIENTID'),
                    new \PHPStan\Type\Constant\ConstantStringType('FORBIDDEN_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MQTT_KEEP_ALIVE_TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVER_INITIATED_DISCONNECT'),
                    new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET_TTL_EXPIRATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMAUTH_TTL_EXPIRATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
            ]),
        ]);
    }
    private function getManagedThingMetaData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedThingId'),
                new \PHPStan\Type\Constant\ConstantStringType('MetaData'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getManagedThingState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_COMMAND'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_COMMAND_REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_EVENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_LIFE_CYCLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_STATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_OTA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_ASSOCIATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_ERROR_REPORT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getOtaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Url'),
                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('OtaType'),
                new \PHPStan\Type\Constant\ConstantStringType('OtaTargetQueryString'),
                new \PHPStan\Type\Constant\ConstantStringType('OtaMechanism'),
                new \PHPStan\Type\Constant\ConstantStringType('Target'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskProcessingDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('OtaSchedulingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('OtaTaskExecutionRetryConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONE_TIME'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('PUSH'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfCanceledThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfFailedThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfInProgressThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfQueuedThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfRejectedThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfRemovedThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfSucceededThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfTimedOutThings'),
                    new \PHPStan\Type\Constant\ConstantStringType('processingTargets'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_ROLLOUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_CANCEL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DurationInMinutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RetryConfigCriteria'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FailureType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinNumberOfRetries'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                ]),
            ]),
        ]);
    }
    private function getOtaTaskConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('PushConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AbortConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RolloutConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AbortConfigCriteriaList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailureType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinNumberOfExecutedThings'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdPercentage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('CANCEL'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExponentialRolloutRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumPerMinute'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BaseRatePerMinute'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncrementFactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('RateIncreaseCriteria'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfNotifiedThings'),
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfSucceededThings'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgressTimeoutInMinutes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getProvisioningProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningType'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ClaimCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FLEET_PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('JITR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getRuntimeLogConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedThingId'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeLogConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogFlushLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalStoreLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalStoreFileRotationMaxFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalStoreFileRotationMaxBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadLog'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadPeriodMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteLocalStoreAfterUpload'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getSchemaVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaId'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('capability'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function listCredentialLockers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DestinationList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryDestinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryDestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventLogConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventLogConfigurationList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventLogLevel'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedThingSchemas(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapabilityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedThings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvertisedProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Brand'),
                        new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectorDeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectorPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Model'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('CredentialLockerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentControllerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisioningStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActivatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNASSOCIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRE_ASSOCIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONTROLLER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNotificationConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotificationConfigurationList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_COMMAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_COMMAND_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_LIFE_CYCLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_OTA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_ASSOCIATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR_ERROR_REPORT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOtaTaskConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOtaTaskExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedThingId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueuedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryAttempt'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOtaTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisioningProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisioningType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('JITR'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSchemaVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('capability'),
                            new \PHPStan\Type\Constant\ConstantStringType('definition'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putDefaultEncryptionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED_INTEGRATIONS_DEFAULT_ENCRYPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KEY_ENCRYPTION'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putHubConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HubTokenTimerExpirySettingInSeconds'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function putRuntimeLogConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function registerCustomEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointAddress'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resetRuntimeLogConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function sendManagedThingCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TraceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDeviceDiscovery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateEventLogConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateManagedThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateOtaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}