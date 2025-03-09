<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTWirelessClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTWireless\IoTWirelessClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTWireless\IoTWirelessClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAwsAccountWithPartnerAccount',
            'associateMulticastGroupWithFuotaTask',
            'associateWirelessDeviceWithFuotaTask',
            'associateWirelessDeviceWithMulticastGroup',
            'associateWirelessDeviceWithThing',
            'associateWirelessGatewayWithCertificate',
            'associateWirelessGatewayWithThing',
            'cancelMulticastGroupSession',
            'createDestination',
            'createDeviceProfile',
            'createFuotaTask',
            'createMulticastGroup',
            'createNetworkAnalyzerConfiguration',
            'createServiceProfile',
            'createWirelessDevice',
            'createWirelessGateway',
            'createWirelessGatewayTask',
            'createWirelessGatewayTaskDefinition',
            'deleteDestination',
            'deleteDeviceProfile',
            'deleteFuotaTask',
            'deleteMulticastGroup',
            'deleteNetworkAnalyzerConfiguration',
            'deleteQueuedMessages',
            'deleteServiceProfile',
            'deleteWirelessDevice',
            'deleteWirelessDeviceImportTask',
            'deleteWirelessGateway',
            'deleteWirelessGatewayTask',
            'deleteWirelessGatewayTaskDefinition',
            'deregisterWirelessDevice',
            'disassociateAwsAccountFromPartnerAccount',
            'disassociateMulticastGroupFromFuotaTask',
            'disassociateWirelessDeviceFromFuotaTask',
            'disassociateWirelessDeviceFromMulticastGroup',
            'disassociateWirelessDeviceFromThing',
            'disassociateWirelessGatewayFromCertificate',
            'disassociateWirelessGatewayFromThing',
            'getDestination',
            'getDeviceProfile',
            'getEventConfigurationByResourceTypes',
            'getFuotaTask',
            'getLogLevelsByResourceTypes',
            'getMetricConfiguration',
            'getMetrics',
            'getMulticastGroup',
            'getMulticastGroupSession',
            'getNetworkAnalyzerConfiguration',
            'getPartnerAccount',
            'getPosition',
            'getPositionConfiguration',
            'getPositionEstimate',
            'getResourceEventConfiguration',
            'getResourceLogLevel',
            'getResourcePosition',
            'getServiceEndpoint',
            'getServiceProfile',
            'getWirelessDevice',
            'getWirelessDeviceImportTask',
            'getWirelessDeviceStatistics',
            'getWirelessGateway',
            'getWirelessGatewayCertificate',
            'getWirelessGatewayFirmwareInformation',
            'getWirelessGatewayStatistics',
            'getWirelessGatewayTask',
            'getWirelessGatewayTaskDefinition',
            'listDestinations',
            'listDeviceProfiles',
            'listDevicesForWirelessDeviceImportTask',
            'listEventConfigurations',
            'listFuotaTasks',
            'listMulticastGroups',
            'listMulticastGroupsByFuotaTask',
            'listNetworkAnalyzerConfigurations',
            'listPartnerAccounts',
            'listPositionConfigurations',
            'listQueuedMessages',
            'listServiceProfiles',
            'listTagsForResource',
            'listWirelessDeviceImportTasks',
            'listWirelessDevices',
            'listWirelessGatewayTaskDefinitions',
            'listWirelessGateways',
            'putPositionConfiguration',
            'putResourceLogLevel',
            'resetAllResourceLogLevels',
            'resetResourceLogLevel',
            'sendDataToMulticastGroup',
            'sendDataToWirelessDevice',
            'startBulkAssociateWirelessDeviceWithMulticastGroup',
            'startBulkDisassociateWirelessDeviceFromMulticastGroup',
            'startFuotaTask',
            'startMulticastGroupSession',
            'startSingleWirelessDeviceImportTask',
            'startWirelessDeviceImportTask',
            'tagResource',
            'testWirelessDevice',
            'untagResource',
            'updateDestination',
            'updateEventConfigurationByResourceTypes',
            'updateFuotaTask',
            'updateLogLevelsByResourceTypes',
            'updateMetricConfiguration',
            'updateMulticastGroup',
            'updateNetworkAnalyzerConfiguration',
            'updatePartnerAccount',
            'updatePosition',
            'updateResourceEventConfiguration',
            'updateResourcePosition',
            'updateWirelessDevice',
            'updateWirelessDeviceImportTask',
            'updateWirelessGateway',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAwsAccountWithPartnerAccount' => $this->associateAwsAccountWithPartnerAccount(),
            'associateMulticastGroupWithFuotaTask' => $this->associateMulticastGroupWithFuotaTask(),
            'associateWirelessDeviceWithFuotaTask' => $this->associateWirelessDeviceWithFuotaTask(),
            'associateWirelessDeviceWithMulticastGroup' => $this->associateWirelessDeviceWithMulticastGroup(),
            'associateWirelessDeviceWithThing' => $this->associateWirelessDeviceWithThing(),
            'associateWirelessGatewayWithCertificate' => $this->associateWirelessGatewayWithCertificate(),
            'associateWirelessGatewayWithThing' => $this->associateWirelessGatewayWithThing(),
            'cancelMulticastGroupSession' => $this->cancelMulticastGroupSession(),
            'createDestination' => $this->createDestination(),
            'createDeviceProfile' => $this->createDeviceProfile(),
            'createFuotaTask' => $this->createFuotaTask(),
            'createMulticastGroup' => $this->createMulticastGroup(),
            'createNetworkAnalyzerConfiguration' => $this->createNetworkAnalyzerConfiguration(),
            'createServiceProfile' => $this->createServiceProfile(),
            'createWirelessDevice' => $this->createWirelessDevice(),
            'createWirelessGateway' => $this->createWirelessGateway(),
            'createWirelessGatewayTask' => $this->createWirelessGatewayTask(),
            'createWirelessGatewayTaskDefinition' => $this->createWirelessGatewayTaskDefinition(),
            'deleteDestination' => $this->deleteDestination(),
            'deleteDeviceProfile' => $this->deleteDeviceProfile(),
            'deleteFuotaTask' => $this->deleteFuotaTask(),
            'deleteMulticastGroup' => $this->deleteMulticastGroup(),
            'deleteNetworkAnalyzerConfiguration' => $this->deleteNetworkAnalyzerConfiguration(),
            'deleteQueuedMessages' => $this->deleteQueuedMessages(),
            'deleteServiceProfile' => $this->deleteServiceProfile(),
            'deleteWirelessDevice' => $this->deleteWirelessDevice(),
            'deleteWirelessDeviceImportTask' => $this->deleteWirelessDeviceImportTask(),
            'deleteWirelessGateway' => $this->deleteWirelessGateway(),
            'deleteWirelessGatewayTask' => $this->deleteWirelessGatewayTask(),
            'deleteWirelessGatewayTaskDefinition' => $this->deleteWirelessGatewayTaskDefinition(),
            'deregisterWirelessDevice' => $this->deregisterWirelessDevice(),
            'disassociateAwsAccountFromPartnerAccount' => $this->disassociateAwsAccountFromPartnerAccount(),
            'disassociateMulticastGroupFromFuotaTask' => $this->disassociateMulticastGroupFromFuotaTask(),
            'disassociateWirelessDeviceFromFuotaTask' => $this->disassociateWirelessDeviceFromFuotaTask(),
            'disassociateWirelessDeviceFromMulticastGroup' => $this->disassociateWirelessDeviceFromMulticastGroup(),
            'disassociateWirelessDeviceFromThing' => $this->disassociateWirelessDeviceFromThing(),
            'disassociateWirelessGatewayFromCertificate' => $this->disassociateWirelessGatewayFromCertificate(),
            'disassociateWirelessGatewayFromThing' => $this->disassociateWirelessGatewayFromThing(),
            'getDestination' => $this->getDestination(),
            'getDeviceProfile' => $this->getDeviceProfile(),
            'getEventConfigurationByResourceTypes' => $this->getEventConfigurationByResourceTypes(),
            'getFuotaTask' => $this->getFuotaTask(),
            'getLogLevelsByResourceTypes' => $this->getLogLevelsByResourceTypes(),
            'getMetricConfiguration' => $this->getMetricConfiguration(),
            'getMetrics' => $this->getMetrics(),
            'getMulticastGroup' => $this->getMulticastGroup(),
            'getMulticastGroupSession' => $this->getMulticastGroupSession(),
            'getNetworkAnalyzerConfiguration' => $this->getNetworkAnalyzerConfiguration(),
            'getPartnerAccount' => $this->getPartnerAccount(),
            'getPosition' => $this->getPosition(),
            'getPositionConfiguration' => $this->getPositionConfiguration(),
            'getPositionEstimate' => $this->getPositionEstimate(),
            'getResourceEventConfiguration' => $this->getResourceEventConfiguration(),
            'getResourceLogLevel' => $this->getResourceLogLevel(),
            'getResourcePosition' => $this->getResourcePosition(),
            'getServiceEndpoint' => $this->getServiceEndpoint(),
            'getServiceProfile' => $this->getServiceProfile(),
            'getWirelessDevice' => $this->getWirelessDevice(),
            'getWirelessDeviceImportTask' => $this->getWirelessDeviceImportTask(),
            'getWirelessDeviceStatistics' => $this->getWirelessDeviceStatistics(),
            'getWirelessGateway' => $this->getWirelessGateway(),
            'getWirelessGatewayCertificate' => $this->getWirelessGatewayCertificate(),
            'getWirelessGatewayFirmwareInformation' => $this->getWirelessGatewayFirmwareInformation(),
            'getWirelessGatewayStatistics' => $this->getWirelessGatewayStatistics(),
            'getWirelessGatewayTask' => $this->getWirelessGatewayTask(),
            'getWirelessGatewayTaskDefinition' => $this->getWirelessGatewayTaskDefinition(),
            'listDestinations' => $this->listDestinations(),
            'listDeviceProfiles' => $this->listDeviceProfiles(),
            'listDevicesForWirelessDeviceImportTask' => $this->listDevicesForWirelessDeviceImportTask(),
            'listEventConfigurations' => $this->listEventConfigurations(),
            'listFuotaTasks' => $this->listFuotaTasks(),
            'listMulticastGroups' => $this->listMulticastGroups(),
            'listMulticastGroupsByFuotaTask' => $this->listMulticastGroupsByFuotaTask(),
            'listNetworkAnalyzerConfigurations' => $this->listNetworkAnalyzerConfigurations(),
            'listPartnerAccounts' => $this->listPartnerAccounts(),
            'listPositionConfigurations' => $this->listPositionConfigurations(),
            'listQueuedMessages' => $this->listQueuedMessages(),
            'listServiceProfiles' => $this->listServiceProfiles(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWirelessDeviceImportTasks' => $this->listWirelessDeviceImportTasks(),
            'listWirelessDevices' => $this->listWirelessDevices(),
            'listWirelessGatewayTaskDefinitions' => $this->listWirelessGatewayTaskDefinitions(),
            'listWirelessGateways' => $this->listWirelessGateways(),
            'putPositionConfiguration' => $this->putPositionConfiguration(),
            'putResourceLogLevel' => $this->putResourceLogLevel(),
            'resetAllResourceLogLevels' => $this->resetAllResourceLogLevels(),
            'resetResourceLogLevel' => $this->resetResourceLogLevel(),
            'sendDataToMulticastGroup' => $this->sendDataToMulticastGroup(),
            'sendDataToWirelessDevice' => $this->sendDataToWirelessDevice(),
            'startBulkAssociateWirelessDeviceWithMulticastGroup' => $this->startBulkAssociateWirelessDeviceWithMulticastGroup(),
            'startBulkDisassociateWirelessDeviceFromMulticastGroup' => $this->startBulkDisassociateWirelessDeviceFromMulticastGroup(),
            'startFuotaTask' => $this->startFuotaTask(),
            'startMulticastGroupSession' => $this->startMulticastGroupSession(),
            'startSingleWirelessDeviceImportTask' => $this->startSingleWirelessDeviceImportTask(),
            'startWirelessDeviceImportTask' => $this->startWirelessDeviceImportTask(),
            'tagResource' => $this->tagResource(),
            'testWirelessDevice' => $this->testWirelessDevice(),
            'untagResource' => $this->untagResource(),
            'updateDestination' => $this->updateDestination(),
            'updateEventConfigurationByResourceTypes' => $this->updateEventConfigurationByResourceTypes(),
            'updateFuotaTask' => $this->updateFuotaTask(),
            'updateLogLevelsByResourceTypes' => $this->updateLogLevelsByResourceTypes(),
            'updateMetricConfiguration' => $this->updateMetricConfiguration(),
            'updateMulticastGroup' => $this->updateMulticastGroup(),
            'updateNetworkAnalyzerConfiguration' => $this->updateNetworkAnalyzerConfiguration(),
            'updatePartnerAccount' => $this->updatePartnerAccount(),
            'updatePosition' => $this->updatePosition(),
            'updateResourceEventConfiguration' => $this->updateResourceEventConfiguration(),
            'updateResourcePosition' => $this->updateResourcePosition(),
            'updateWirelessDevice' => $this->updateWirelessDevice(),
            'updateWirelessDeviceImportTask' => $this->updateWirelessDeviceImportTask(),
            'updateWirelessGateway' => $this->updateWirelessGateway(),
        };
    }
    private function associateAwsAccountWithPartnerAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AmazonId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppServerPrivateKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateMulticastGroupWithFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateWirelessDeviceWithFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateWirelessDeviceWithMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateWirelessDeviceWithThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateWirelessGatewayWithCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IotCertificateId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateWirelessGatewayWithThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelMulticastGroupSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDeviceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createNetworkAnalyzerConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createServiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWirelessDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWirelessGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWirelessGatewayTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayTaskDefinitionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIRST_RETRY'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECOND_RETRY'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function createWirelessGatewayTaskDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDeviceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNetworkAnalyzerConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteQueuedMessages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteServiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWirelessDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWirelessDeviceImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWirelessGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWirelessGatewayTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWirelessGatewayTaskDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterWirelessDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateAwsAccountFromPartnerAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateMulticastGroupFromFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateWirelessDeviceFromFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateWirelessDeviceFromMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateWirelessDeviceFromThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateWirelessGatewayFromCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateWirelessGatewayFromThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpressionType'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MqttTopic'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDeviceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsClassB'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClassBTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('PingSlotPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('PingSlotDr'),
                    new \PHPStan\Type\Constant\ConstantStringType('PingSlotFreq'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsClassC'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClassCTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('MacVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegParamsRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('RxDelay1'),
                    new \PHPStan\Type\Constant\ConstantStringType('RxDrOffset1'),
                    new \PHPStan\Type\Constant\ConstantStringType('RxDataRate2'),
                    new \PHPStan\Type\Constant\ConstantStringType('RxFreq2'),
                    new \PHPStan\Type\Constant\ConstantStringType('FactoryPresetFreqsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxEirp'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxDutyCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('RfRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsJoin'),
                    new \PHPStan\Type\Constant\ConstantStringType('Supports32BitFCnt'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationServerPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('QualificationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DakCertificateMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAllowedSignature'),
                            new \PHPStan\Type\Constant\ConstantStringType('FactorySupport'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getEventConfigurationByResourceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceRegistrationState'),
                new \PHPStan\Type\Constant\ConstantStringType('Proximity'),
                new \PHPStan\Type\Constant\ConstantStringType('Join'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageDeliveryStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                new \PHPStan\Type\Constant\ConstantStringType('FirmwareUpdateImage'),
                new \PHPStan\Type\Constant\ConstantStringType('FirmwareUpdateRole'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('RedundancyPercent'),
                new \PHPStan\Type\Constant\ConstantStringType('FragmentSizeBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('FragmentIntervalMS'),
                new \PHPStan\Type\Constant\ConstantStringType('Descriptor'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('FuotaSession_Waiting'),
                    new \PHPStan\Type\Constant\ConstantStringType('In_FuotaSession'),
                    new \PHPStan\Type\Constant\ConstantStringType('FuotaDone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Delete_Waiting'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RfRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLogLevelsByResourceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DefaultLogLevel'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayLogOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceLogOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('FuotaTaskLogOptions'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CUPS_Request'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Join'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rejoin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uplink_Data'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Downlink_Data'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Registration'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('Fuota'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMetricConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryMetric'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryMetricQueryResults'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AggregationPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamps'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceRSSI'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceSNR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceRoamingRSSI'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceRoamingSNR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceUplinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceDownlinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceUplinkLostCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceUplinkLostRate'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceJoinRequestCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceJoinAcceptCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceRoamingUplinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceRoamingDownlinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayUpTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayDownTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayRSSI'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewaySNR'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayUplinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayDownlinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayJoinRequestCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayJoinAcceptCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountUplinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountDownlinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountUplinkLostCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountUplinkLostRate'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountJoinRequestCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountJoinAcceptCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountRoamingUplinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountRoamingDownlinkCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountDeviceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountGatewayCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountActiveDeviceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountActiveGatewayCount'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OneHour'),
                            new \PHPStan\Type\Constant\ConstantStringType('OneDay'),
                            new \PHPStan\Type\Constant\ConstantStringType('OneWeek'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Avg'),
                                new \PHPStan\Type\Constant\ConstantStringType('Std'),
                                new \PHPStan\Type\Constant\ConstantStringType('P90'),
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
                ])),
            ]),
        ]);
    }
    private function getMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RfRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DlClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfDevicesRequested'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfDevicesInGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParticipatingGateways'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EU868'),
                        new \PHPStan\Type\Constant\ConstantStringType('US915'),
                        new \PHPStan\Type\Constant\ConstantStringType('AU915'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS923-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS923-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS923-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS923-4'),
                        new \PHPStan\Type\Constant\ConstantStringType('EU433'),
                        new \PHPStan\Type\Constant\ConstantStringType('CN470'),
                        new \PHPStan\Type\Constant\ConstantStringType('CN779'),
                        new \PHPStan\Type\Constant\ConstantStringType('RU864'),
                        new \PHPStan\Type\Constant\ConstantStringType('KR920'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN865'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClassB'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClassC'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayList'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransmissionInterval'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getMulticastGroupSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DlDr'),
                    new \PHPStan\Type\Constant\ConstantStringType('DlFreq'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('PingSlotPeriod'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getNetworkAnalyzerConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TraceContent'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessDevices'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessGateways'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('MulticastGroups'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceFrameInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('MulticastFrameInfo'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getPartnerAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountLinked'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AmazonId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getPosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Position'),
                new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                new \PHPStan\Type\Constant\ConstantStringType('SolverType'),
                new \PHPStan\Type\Constant\ConstantStringType('SolverProvider'),
                new \PHPStan\Type\Constant\ConstantStringType('SolverVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HorizontalAccuracy'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerticalAccuracy'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('GNSS'),
                new \PHPStan\Type\Constant\ConstantStringType('Semtech'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPositionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Solvers'),
                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SemtechGnss'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fec'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('Semtech'),
                        new \PHPStan\Type\Constant\ConstantStringType('GNSS'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ROSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPositionEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeoJsonPayload'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getResourceEventConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceRegistrationState'),
                new \PHPStan\Type\Constant\ConstantStringType('Proximity'),
                new \PHPStan\Type\Constant\ConstantStringType('Join'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageDeliveryStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                    new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonIdEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                    new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonIdEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DevEuiEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayIdEventTopic'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayEuiEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                    new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonIdEventTopic'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getResourceLogLevel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function getResourcePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeoJsonPayload'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getServiceEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceType'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerTrust'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CUPS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LNS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getServiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UlRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UlBucketSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('UlRatePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DlRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DlBucketSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('DlRatePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddGwMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('DevStatusReqFreq'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportDevStatusBattery'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportDevStatusMargin'),
                    new \PHPStan\Type\Constant\ConstantStringType('DrMin'),
                    new \PHPStan\Type\Constant\ConstantStringType('DrMax'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelMask'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('HrAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('RaAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('NwkGeoLoc'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetPer'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinGwDiversity'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getWirelessDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ThingName'),
                new \PHPStan\Type\Constant\ConstantStringType('ThingArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                new \PHPStan\Type\Constant\ConstantStringType('Positioning'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DevEui'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OtaaV1_1'),
                    new \PHPStan\Type\Constant\ConstantStringType('OtaaV1_0_x'),
                    new \PHPStan\Type\Constant\ConstantStringType('AbpV1_1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AbpV1_0_x'),
                    new \PHPStan\Type\Constant\ConstantStringType('FPorts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('NwkKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('JoinEui'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppEui'),
                        new \PHPStan\Type\Constant\ConstantStringType('JoinEui'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenAppKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DevAddr'),
                        new \PHPStan\Type\Constant\ConstantStringType('SessionKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('FCntStart'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FNwkSIntKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNwkSIntKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NwkSEncKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppSKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DevAddr'),
                        new \PHPStan\Type\Constant\ConstantStringType('SessionKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('FCntStart'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NwkSKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppSKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Fuota'),
                        new \PHPStan\Type\Constant\ConstantStringType('Multicast'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClockSync'),
                        new \PHPStan\Type\Constant\ConstantStringType('Positioning'),
                        new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClockSync'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stream'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gnss'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('SemtechGeolocation'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AmazonId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SidewalkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SidewalkManufacturingSn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceCertificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrivateKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SigningAlg'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Ed25519'),
                                new \PHPStan\Type\Constant\ConstantStringType('P256r1'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SigningAlg'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Ed25519'),
                                new \PHPStan\Type\Constant\ConstantStringType('P256r1'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ]),
            ]),
        ]);
    }
    private function getWirelessDeviceImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('InitializedImportedDeviceCount'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingImportedDeviceCount'),
                new \PHPStan\Type\Constant\ConstantStringType('OnboardedImportedDeviceCount'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedImportedDeviceCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceCreationFileList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getWirelessDeviceStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUplinkReceivedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DevEui'),
                    new \PHPStan\Type\Constant\ConstantStringType('FPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gateways'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicGateways'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayEui'),
                            new \PHPStan\Type\Constant\ConstantStringType('Snr'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rssi'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProviderNetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rssi'),
                            new \PHPStan\Type\Constant\ConstantStringType('Snr'),
                            new \PHPStan\Type\Constant\ConstantStringType('RfRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('DlAllowed'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Rssi'),
                    new \PHPStan\Type\Constant\ConstantStringType('BatteryLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Event'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceState'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('low'),
                        new \PHPStan\Type\Constant\ConstantStringType('critical'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('discovered'),
                        new \PHPStan\Type\Constant\ConstantStringType('lost'),
                        new \PHPStan\Type\Constant\ConstantStringType('ack'),
                        new \PHPStan\Type\Constant\ConstantStringType('nack'),
                        new \PHPStan\Type\Constant\ConstantStringType('passthrough'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Provisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredNotSeen'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredReachable'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredUnreachable'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getWirelessGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ThingName'),
                new \PHPStan\Type\Constant\ConstantStringType('ThingArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayEui'),
                    new \PHPStan\Type\Constant\ConstantStringType('RfRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinEuiFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetIdFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubBands'),
                    new \PHPStan\Type\Constant\ConstantStringType('Beaconing'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxEirp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Frequencies'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getWirelessGatewayCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IotCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWANNetworkServerCertificateId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getWirelessGatewayFirmwareInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Model'),
                        new \PHPStan\Type\Constant\ConstantStringType('Station'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getWirelessGatewayStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUplinkReceivedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Connected'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disconnected'),
                ]),
            ]),
        ]);
    }
    private function getWirelessGatewayTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayTaskDefinitionId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUplinkReceivedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskCreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIRST_RETRY'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECOND_RETRY'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function getWirelessGatewayTaskDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoCreateTasks'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Update'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateDataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateDataRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateSignature'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigKeyCrc'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Model'),
                            new \PHPStan\Type\Constant\ConstantStringType('Station'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Model'),
                            new \PHPStan\Type\Constant\ConstantStringType('Station'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MqttTopic'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listDeviceProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceProfileList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listDevicesForWirelessDeviceImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportedWirelessDeviceList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SidewalkManufacturingSn'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnboardingStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnboardingStatusReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ONBOARDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listEventConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('EventConfigurationsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifierType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartnerType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PartnerAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DevEui'),
                            new \PHPStan\Type\Constant\ConstantStringType('FuotaTaskId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayEui'),
                            new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayId'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceRegistrationState'),
                            new \PHPStan\Type\Constant\ConstantStringType('Proximity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Join'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('MessageDeliveryStatus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AmazonIdEventTopic'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AmazonIdEventTopic'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DevEuiEventTopic'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayIdEventTopic'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GatewayEuiEventTopic'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceIdEventTopic'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AmazonIdEventTopic'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFuotaTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FuotaTaskList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listMulticastGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MulticastGroupList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listMulticastGroupsByFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MulticastGroupList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listNetworkAnalyzerConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NetworkAnalyzerConfigurationList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPartnerAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fingerprint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPositionConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PositionConfigurationList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Solvers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WirelessDevice'),
                            new \PHPStan\Type\Constant\ConstantStringType('WirelessGateway'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SemtechGnss'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Fec'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('Semtech'),
                                new \PHPStan\Type\Constant\ConstantStringType('GNSS'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROSE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQueuedMessages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DownlinkQueueMessagesList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransmitMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReceivedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParticipatingGateways'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DownlinkMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('GatewayList'),
                                new \PHPStan\Type\Constant\ConstantStringType('TransmissionInterval'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONCURRENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USING_UPLINK_GATEWAY'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DownlinkFrequency'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listServiceProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceProfileList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
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
    private function listWirelessDeviceImportTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceImportTaskList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitializedImportedDeviceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingImportedDeviceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnboardedImportedDeviceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailedImportedDeviceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceCreationFileList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWirelessDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessDeviceList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUplinkReceivedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                        new \PHPStan\Type\Constant\ConstantStringType('FuotaDeviceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('MulticastDeviceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('McGroupId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sidewalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DevEui'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SidewalkId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SidewalkManufacturingSn'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceCertificates'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceProfileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SigningAlg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Ed25519'),
                                        new \PHPStan\Type\Constant\ConstantStringType('P256r1'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Initial'),
                            new \PHPStan\Type\Constant\ConstantStringType('Package_Not_Supported'),
                            new \PHPStan\Type\Constant\ConstantStringType('FragAlgo_unsupported'),
                            new \PHPStan\Type\Constant\ConstantStringType('Not_enough_memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('FragIndex_unsupported'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrong_descriptor'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCnt_replay'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingFrag'),
                            new \PHPStan\Type\Constant\ConstantStringType('MemoryError'),
                            new \PHPStan\Type\Constant\ConstantStringType('MICError'),
                            new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                            new \PHPStan\Type\Constant\ConstantStringType('Device_exist_in_conflict_fuota_task'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWirelessGatewayTaskDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskDefinitions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Model'),
                                new \PHPStan\Type\Constant\ConstantStringType('Station'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Model'),
                                new \PHPStan\Type\Constant\ConstantStringType('Station'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWirelessGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WirelessGatewayList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoRaWAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUplinkReceivedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GatewayEui'),
                            new \PHPStan\Type\Constant\ConstantStringType('RfRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('JoinEuiFilters'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetIdFilters'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubBands'),
                            new \PHPStan\Type\Constant\ConstantStringType('Beaconing'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxEirp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataRate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Frequencies'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putPositionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putResourceLogLevel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function resetAllResourceLogLevels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function resetResourceLogLevel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendDataToMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendDataToWirelessDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startBulkAssociateWirelessDeviceWithMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startBulkDisassociateWirelessDeviceFromMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startMulticastGroupSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startSingleWirelessDeviceImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startWirelessDeviceImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function testWirelessDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Result'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEventConfigurationByResourceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateFuotaTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLogLevelsByResourceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMetricConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMulticastGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateNetworkAnalyzerConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePartnerAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResourceEventConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResourcePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWirelessDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWirelessDeviceImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWirelessGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}