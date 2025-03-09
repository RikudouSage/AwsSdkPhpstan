<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DeviceFarmClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DeviceFarm\DeviceFarmClient>
     */
    public function getClass(): string
    {
        return \Aws\DeviceFarm\DeviceFarmClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createDevicePool',
            'createInstanceProfile',
            'createNetworkProfile',
            'createProject',
            'createRemoteAccessSession',
            'createTestGridProject',
            'createTestGridUrl',
            'createUpload',
            'createVPCEConfiguration',
            'deleteDevicePool',
            'deleteInstanceProfile',
            'deleteNetworkProfile',
            'deleteProject',
            'deleteRemoteAccessSession',
            'deleteRun',
            'deleteTestGridProject',
            'deleteUpload',
            'deleteVPCEConfiguration',
            'getAccountSettings',
            'getDevice',
            'getDeviceInstance',
            'getDevicePool',
            'getDevicePoolCompatibility',
            'getInstanceProfile',
            'getJob',
            'getNetworkProfile',
            'getOfferingStatus',
            'getProject',
            'getRemoteAccessSession',
            'getRun',
            'getSuite',
            'getTest',
            'getTestGridProject',
            'getTestGridSession',
            'getUpload',
            'getVPCEConfiguration',
            'installToRemoteAccessSession',
            'listArtifacts',
            'listDeviceInstances',
            'listDevicePools',
            'listDevices',
            'listInstanceProfiles',
            'listJobs',
            'listNetworkProfiles',
            'listOfferingPromotions',
            'listOfferingTransactions',
            'listOfferings',
            'listProjects',
            'listRemoteAccessSessions',
            'listRuns',
            'listSamples',
            'listSuites',
            'listTagsForResource',
            'listTestGridProjects',
            'listTestGridSessionActions',
            'listTestGridSessionArtifacts',
            'listTestGridSessions',
            'listTests',
            'listUniqueProblems',
            'listUploads',
            'listVPCEConfigurations',
            'purchaseOffering',
            'renewOffering',
            'scheduleRun',
            'stopJob',
            'stopRemoteAccessSession',
            'stopRun',
            'tagResource',
            'untagResource',
            'updateDeviceInstance',
            'updateDevicePool',
            'updateInstanceProfile',
            'updateNetworkProfile',
            'updateProject',
            'updateTestGridProject',
            'updateUpload',
            'updateVPCEConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createDevicePool' => $this->createDevicePool(),
            'createInstanceProfile' => $this->createInstanceProfile(),
            'createNetworkProfile' => $this->createNetworkProfile(),
            'createProject' => $this->createProject(),
            'createRemoteAccessSession' => $this->createRemoteAccessSession(),
            'createTestGridProject' => $this->createTestGridProject(),
            'createTestGridUrl' => $this->createTestGridUrl(),
            'createUpload' => $this->createUpload(),
            'createVPCEConfiguration' => $this->createVPCEConfiguration(),
            'deleteDevicePool' => $this->deleteDevicePool(),
            'deleteInstanceProfile' => $this->deleteInstanceProfile(),
            'deleteNetworkProfile' => $this->deleteNetworkProfile(),
            'deleteProject' => $this->deleteProject(),
            'deleteRemoteAccessSession' => $this->deleteRemoteAccessSession(),
            'deleteRun' => $this->deleteRun(),
            'deleteTestGridProject' => $this->deleteTestGridProject(),
            'deleteUpload' => $this->deleteUpload(),
            'deleteVPCEConfiguration' => $this->deleteVPCEConfiguration(),
            'getAccountSettings' => $this->getAccountSettings(),
            'getDevice' => $this->getDevice(),
            'getDeviceInstance' => $this->getDeviceInstance(),
            'getDevicePool' => $this->getDevicePool(),
            'getDevicePoolCompatibility' => $this->getDevicePoolCompatibility(),
            'getInstanceProfile' => $this->getInstanceProfile(),
            'getJob' => $this->getJob(),
            'getNetworkProfile' => $this->getNetworkProfile(),
            'getOfferingStatus' => $this->getOfferingStatus(),
            'getProject' => $this->getProject(),
            'getRemoteAccessSession' => $this->getRemoteAccessSession(),
            'getRun' => $this->getRun(),
            'getSuite' => $this->getSuite(),
            'getTest' => $this->getTest(),
            'getTestGridProject' => $this->getTestGridProject(),
            'getTestGridSession' => $this->getTestGridSession(),
            'getUpload' => $this->getUpload(),
            'getVPCEConfiguration' => $this->getVPCEConfiguration(),
            'installToRemoteAccessSession' => $this->installToRemoteAccessSession(),
            'listArtifacts' => $this->listArtifacts(),
            'listDeviceInstances' => $this->listDeviceInstances(),
            'listDevicePools' => $this->listDevicePools(),
            'listDevices' => $this->listDevices(),
            'listInstanceProfiles' => $this->listInstanceProfiles(),
            'listJobs' => $this->listJobs(),
            'listNetworkProfiles' => $this->listNetworkProfiles(),
            'listOfferingPromotions' => $this->listOfferingPromotions(),
            'listOfferingTransactions' => $this->listOfferingTransactions(),
            'listOfferings' => $this->listOfferings(),
            'listProjects' => $this->listProjects(),
            'listRemoteAccessSessions' => $this->listRemoteAccessSessions(),
            'listRuns' => $this->listRuns(),
            'listSamples' => $this->listSamples(),
            'listSuites' => $this->listSuites(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTestGridProjects' => $this->listTestGridProjects(),
            'listTestGridSessionActions' => $this->listTestGridSessionActions(),
            'listTestGridSessionArtifacts' => $this->listTestGridSessionArtifacts(),
            'listTestGridSessions' => $this->listTestGridSessions(),
            'listTests' => $this->listTests(),
            'listUniqueProblems' => $this->listUniqueProblems(),
            'listUploads' => $this->listUploads(),
            'listVPCEConfigurations' => $this->listVPCEConfigurations(),
            'purchaseOffering' => $this->purchaseOffering(),
            'renewOffering' => $this->renewOffering(),
            'scheduleRun' => $this->scheduleRun(),
            'stopJob' => $this->stopJob(),
            'stopRemoteAccessSession' => $this->stopRemoteAccessSession(),
            'stopRun' => $this->stopRun(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDeviceInstance' => $this->updateDeviceInstance(),
            'updateDevicePool' => $this->updateDevicePool(),
            'updateInstanceProfile' => $this->updateInstanceProfile(),
            'updateNetworkProfile' => $this->updateNetworkProfile(),
            'updateProject' => $this->updateProject(),
            'updateTestGridProject' => $this->updateTestGridProject(),
            'updateUpload' => $this->updateUpload(),
            'updateVPCEConfiguration' => $this->updateVPCEConfiguration(),
        };
    }
    private function createDevicePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('devicePool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPIUM_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createNetworkProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('project'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultJobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createRemoteAccessSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('remoteAccessSession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordAppArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceUdid'),
                    new \PHPStan\Type\Constant\ConstantStringType('interactionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_VIDEO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIDEO_ONLY'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createTestGridProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testGridProject'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createTestGridUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('url'),
                new \PHPStan\Type\Constant\ConstantStringType('expires'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('upload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATOR_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_SPEC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createVPCEConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vpceConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDevicePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNetworkProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRemoteAccessSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTestGridProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteVPCEConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('unmeteredDevices'),
                    new \PHPStan\Type\Constant\ConstantStringType('unmeteredRemoteAccessDevices'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxJobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('trialMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxSlots'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultJobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('remaining'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                    new \PHPStan\Type\Constant\ConstantStringType('model'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('image'),
                    new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                    new \PHPStan\Type\Constant\ConstantStringType('radio'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('availability'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('clock'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('width'),
                        new \PHPStan\Type\Constant\ConstantStringType('height'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('udid'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                            new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                            new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDeviceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deviceInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('udid'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                        new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDevicePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('devicePool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPIUM_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getDevicePoolCompatibility(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('compatibleDevices'),
                new \PHPStan\Type\Constant\ConstantStringType('incompatibleDevices'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    new \PHPStan\Type\Constant\ConstantStringType('incompatibilityMessages'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPIUM_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    new \PHPStan\Type\Constant\ConstantStringType('incompatibilityMessages'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPIUM_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        ]),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoCapture'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getNetworkProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getOfferingStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('current'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('offering'),
                    new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveOn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PURCHASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RENEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('recurringCharges'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cost'),
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('amount'),
                                new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        ])),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('offering'),
                    new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveOn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PURCHASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RENEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('recurringCharges'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cost'),
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('amount'),
                                new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        ])),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('project'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultJobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRemoteAccessSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('remoteAccessSession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordAppArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceUdid'),
                    new \PHPStan\Type\Constant\ConstantStringType('interactionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_VIDEO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIDEO_ONLY'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('run'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                    new \PHPStan\Type\Constant\ConstantStringType('parsingResultUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('seed'),
                    new \PHPStan\Type\Constant\ConstantStringType('appUpload'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('devicePoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('radios'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerArtifactPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('webUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('testSpecArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceSelectionResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PARSING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SETUP_FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('wifi'),
                        new \PHPStan\Type\Constant\ConstantStringType('bluetooth'),
                        new \PHPStan\Type\Constant\ConstantStringType('nfc'),
                        new \PHPStan\Type\Constant\ConstantStringType('gps'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('longitude'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('iosPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('androidPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceHostPaths'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchedDevicesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSuite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suite'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('test'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTestGridProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testGridProject'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getTestGridSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testGridSession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('ended'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('seleniumProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('upload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATOR_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_SPEC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getVPCEConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vpceConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function installToRemoteAccessSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appUpload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATOR_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_SPEC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listArtifacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('extension'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCREENSHOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEVICE_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIDEO_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESULT_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEBKIT_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXERCISER_MONKEY_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_JSON_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_PRETTY_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_STANDARD_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_JAVA_XML_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_SERVER_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_XML_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_XML_OUTPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPLORER_EVENT_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPLORER_SUMMARY_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_CRASH_REPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIDEO'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_ARTIFACT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_ARTIFACT_LOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTSPEC_OUTPUT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeviceInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deviceInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('udid'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                        new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDevicePools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('devicePools'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPIUM_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('devices'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                    new \PHPStan\Type\Constant\ConstantStringType('model'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('image'),
                    new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                    new \PHPStan\Type\Constant\ConstantStringType('radio'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('availability'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('clock'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('width'),
                        new \PHPStan\Type\Constant\ConstantStringType('height'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('udid'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                            new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                            new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceProfiles'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoCapture'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNetworkProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkProfiles'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOfferingPromotions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('offeringPromotions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOfferingTransactions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('offeringTransactions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('offeringStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('offeringPromotionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('cost'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('offering'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('effectiveOn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PURCHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RENEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('recurringCharges'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                                new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cost'),
                                new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOfferings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('offerings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('recurringCharges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cost'),
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('projects'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultJobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRemoteAccessSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('remoteAccessSessions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordAppArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceUdid'),
                    new \PHPStan\Type\Constant\ConstantStringType('interactionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_VIDEO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIDEO_ONLY'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('runs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                    new \PHPStan\Type\Constant\ConstantStringType('parsingResultUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('seed'),
                    new \PHPStan\Type\Constant\ConstantStringType('appUpload'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('devicePoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('radios'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerArtifactPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('webUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('testSpecArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceSelectionResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PARSING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SETUP_FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('wifi'),
                        new \PHPStan\Type\Constant\ConstantStringType('bluetooth'),
                        new \PHPStan\Type\Constant\ConstantStringType('nfc'),
                        new \PHPStan\Type\Constant\ConstantStringType('gps'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('longitude'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('iosPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('androidPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceHostPaths'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchedDevicesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSamples(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('samples'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('THREADS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RX_RATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TX_RATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RX'),
                        new \PHPStan\Type\Constant\ConstantStringType('TX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NATIVE_FRAMES'),
                        new \PHPStan\Type\Constant\ConstantStringType('NATIVE_FPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NATIVE_MIN_DRAWTIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('NATIVE_AVG_DRAWTIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('NATIVE_MAX_DRAWTIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENGL_FRAMES'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENGL_FPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENGL_MIN_DRAWTIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENGL_AVG_DRAWTIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENGL_MAX_DRAWTIME'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSuites(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suites'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTestGridProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testGridProjects'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestGridSessionActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestGridSessionArtifacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('filename'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIDEO'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELENIUM_LOG'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestGridSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testGridSessions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('ended'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('seleniumProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tests'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUniqueProblems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('uniqueProblems'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('problems'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('run'),
                        new \PHPStan\Type\Constant\ConstantStringType('job'),
                        new \PHPStan\Type\Constant\ConstantStringType('suite'),
                        new \PHPStan\Type\Constant\ConstantStringType('test'),
                        new \PHPStan\Type\Constant\ConstantStringType('device'),
                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                            new \PHPStan\Type\Constant\ConstantStringType('model'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('os'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                            new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                            new \PHPStan\Type\Constant\ConstantStringType('radio'),
                            new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                            new \PHPStan\Type\Constant\ConstantStringType('instances'),
                            new \PHPStan\Type\Constant\ConstantStringType('availability'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                                new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                                new \PHPStan\Type\Constant\ConstantStringType('clock'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('width'),
                                new \PHPStan\Type\Constant\ConstantStringType('height'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('labels'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('udid'),
                                new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]))),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUploads(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('uploads'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATOR_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_SPEC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVPCEConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function purchaseOffering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('offeringTransaction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('offeringStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('offeringPromotionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('cost'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('offering'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('effectiveOn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PURCHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RENEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('recurringCharges'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                                new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cost'),
                                new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function renewOffering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('offeringTransaction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('offeringStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('offeringPromotionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('cost'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('offering'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('effectiveOn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PURCHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RENEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('recurringCharges'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                                new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cost'),
                                new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function scheduleRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('run'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                    new \PHPStan\Type\Constant\ConstantStringType('parsingResultUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('seed'),
                    new \PHPStan\Type\Constant\ConstantStringType('appUpload'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('devicePoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('radios'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerArtifactPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('webUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('testSpecArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceSelectionResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PARSING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SETUP_FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('wifi'),
                        new \PHPStan\Type\Constant\ConstantStringType('bluetooth'),
                        new \PHPStan\Type\Constant\ConstantStringType('nfc'),
                        new \PHPStan\Type\Constant\ConstantStringType('gps'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('longitude'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('iosPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('androidPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceHostPaths'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchedDevicesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoCapture'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function stopRemoteAccessSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('remoteAccessSession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRecordAppArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceUdid'),
                    new \PHPStan\Type\Constant\ConstantStringType('interactionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('manufacturer'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('heapSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('carrier'),
                        new \PHPStan\Type\Constant\ConstantStringType('radio'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteDebugEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('availability'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('clock'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('width'),
                            new \PHPStan\Type\Constant\ConstantStringType('height'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('udid'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                                new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEMPORARY_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGHLY_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_VIDEO'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIDEO_ONLY'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('run'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('started'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('counters'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('billingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceProxy'),
                    new \PHPStan\Type\Constant\ConstantStringType('parsingResultUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('seed'),
                    new \PHPStan\Type\Constant\ConstantStringType('appUpload'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('devicePoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('radios'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerArtifactPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('webUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipAppResign'),
                    new \PHPStan\Type\Constant\ConstantStringType('testSpecArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceSelectionResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILTIN_FUZZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CONCURRENCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('warned'),
                        new \PHPStan\Type\Constant\ConstantStringType('errored'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMETERED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('metered'),
                        new \PHPStan\Type\Constant\ConstantStringType('unmetered'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PARSING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SETUP_FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('wifi'),
                        new \PHPStan\Type\Constant\ConstantStringType('bluetooth'),
                        new \PHPStan\Type\Constant\ConstantStringType('nfc'),
                        new \PHPStan\Type\Constant\ConstantStringType('gps'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('longitude'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('iosPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('androidPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceHostPaths'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchedDevicesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
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
    private function updateDeviceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deviceInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('udid'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                        new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateDevicePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('devicePool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxDevices'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('operator'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_FACTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUFACTURER'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_DEBUG_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPIUM_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_LABELS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OS_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('excludeAppPackagesFromCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('rebootAfterUse'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateNetworkProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkBandwidthBits'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkDelayMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkJitterMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkLossPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('downlinkLossPercent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('project'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultJobTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateTestGridProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testGridProject'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('upload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANDROID_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('IOS_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CALABASH_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATION_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UIAUTOMATOR_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_JUNIT_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_JAVA_TESTNG_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_PYTHON_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_NODE_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPIUM_WEB_RUBY_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTRUMENTATION_TEST_SPEC'),
                        new \PHPStan\Type\Constant\ConstantStringType('XCTEST_UI_TEST_SPEC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateVPCEConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vpceConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpceConfigurationDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}