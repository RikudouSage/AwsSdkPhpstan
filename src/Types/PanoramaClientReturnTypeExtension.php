<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class PanoramaClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Panorama\PanoramaClient>
     */
    public function getClass(): string
    {
        return \Aws\Panorama\PanoramaClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApplicationInstance',
            'createJobForDevices',
            'createNodeFromTemplateJob',
            'createPackage',
            'createPackageImportJob',
            'deleteDevice',
            'deletePackage',
            'deregisterPackageVersion',
            'describeApplicationInstance',
            'describeApplicationInstanceDetails',
            'describeDevice',
            'describeDeviceJob',
            'describeNode',
            'describeNodeFromTemplateJob',
            'describePackage',
            'describePackageImportJob',
            'describePackageVersion',
            'listApplicationInstanceDependencies',
            'listApplicationInstanceNodeInstances',
            'listApplicationInstances',
            'listDevices',
            'listDevicesJobs',
            'listNodeFromTemplateJobs',
            'listNodes',
            'listPackageImportJobs',
            'listPackages',
            'listTagsForResource',
            'provisionDevice',
            'registerPackageVersion',
            'removeApplicationInstance',
            'signalApplicationInstanceNodeInstances',
            'tagResource',
            'untagResource',
            'updateDeviceMetadata',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApplicationInstance' => $this->createApplicationInstance(),
            'createJobForDevices' => $this->createJobForDevices(),
            'createNodeFromTemplateJob' => $this->createNodeFromTemplateJob(),
            'createPackage' => $this->createPackage(),
            'createPackageImportJob' => $this->createPackageImportJob(),
            'deleteDevice' => $this->deleteDevice(),
            'deletePackage' => $this->deletePackage(),
            'deregisterPackageVersion' => $this->deregisterPackageVersion(),
            'describeApplicationInstance' => $this->describeApplicationInstance(),
            'describeApplicationInstanceDetails' => $this->describeApplicationInstanceDetails(),
            'describeDevice' => $this->describeDevice(),
            'describeDeviceJob' => $this->describeDeviceJob(),
            'describeNode' => $this->describeNode(),
            'describeNodeFromTemplateJob' => $this->describeNodeFromTemplateJob(),
            'describePackage' => $this->describePackage(),
            'describePackageImportJob' => $this->describePackageImportJob(),
            'describePackageVersion' => $this->describePackageVersion(),
            'listApplicationInstanceDependencies' => $this->listApplicationInstanceDependencies(),
            'listApplicationInstanceNodeInstances' => $this->listApplicationInstanceNodeInstances(),
            'listApplicationInstances' => $this->listApplicationInstances(),
            'listDevices' => $this->listDevices(),
            'listDevicesJobs' => $this->listDevicesJobs(),
            'listNodeFromTemplateJobs' => $this->listNodeFromTemplateJobs(),
            'listNodes' => $this->listNodes(),
            'listPackageImportJobs' => $this->listPackageImportJobs(),
            'listPackages' => $this->listPackages(),
            'listTagsForResource' => $this->listTagsForResource(),
            'provisionDevice' => $this->provisionDevice(),
            'registerPackageVersion' => $this->registerPackageVersion(),
            'removeApplicationInstance' => $this->removeApplicationInstance(),
            'signalApplicationInstanceNodeInstances' => $this->signalApplicationInstanceNodeInstances(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDeviceMetadata' => $this->updateDeviceMetadata(),
        };
    }
    private function createApplicationInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstanceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createJobForDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Jobs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createNodeFromTemplateJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageId'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageLocation'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BinaryPrefixLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeneratedPrefixLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestPrefixLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepoPrefixLocation'),
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
    private function createPackageImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deletePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterPackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeApplicationInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstanceIdToReplace'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultRuntimeContextDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultRuntimeContextDeviceName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeContextStates'),
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceReportedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceReportedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuntimeContextName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALL_IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeApplicationInstanceDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstanceIdToReplace'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultRuntimeContextDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestOverridesPayload'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestPayload'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PayloadData'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PayloadData'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AlternateSoftwares'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Brand'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentNetworkingStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentSoftware'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceConnectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestAlternateSoftware'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDeviceJob'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestSoftware'),
                new \PHPStan\Type\Constant\ConstantStringType('LeaseExpirationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('NetworkingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PANORAMA'),
                    new \PHPStan\Type\Constant\ConstantStringType('LENOVO'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Ethernet0Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ethernet1Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NtpStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('HwAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('HwAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('NtpServerName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWAITING_PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LEASE_EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWAITING_CREDENTIALS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOWNLOADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Ethernet0'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ethernet1'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ntp'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('StaticIpConnectionInfo'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STATIC_IP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DHCP'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dns'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Mask'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('StaticIpConnectionInfo'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STATIC_IP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DHCP'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dns'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Mask'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NtpServers'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWAITING_PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PANORAMA_APPLIANCE_DEVELOPER_KIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PANORAMA_APPLIANCE'),
                ]),
            ]),
        ]);
    }
    private function describeDeviceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceType'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PANORAMA_APPLIANCE_DEVELOPER_KIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PANORAMA_APPLIANCE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OTA'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBOOT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERIFYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOADING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function describeNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeInterface'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageId'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PatchVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_LOGIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('ML_MODEL'),
                    new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SOURCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SINK'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Inputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxConnections'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIA'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIA'),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeNodeFromTemplateJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTags'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeName'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputPackageName'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputPackageVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateType'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PACKAGE'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantStringType('RTSP_CAMERA_STREAM'),
            ]),
        ]);
    }
    private function describePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageId'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadAccessPrincipalArns'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('WriteAccessPrincipalArns'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BinaryPrefixLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeneratedPrefixLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestPrefixLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepoPrefixLocation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describePackageImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('InputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobTags'),
                new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Output'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersionInputConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PACKAGE'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NODE_PACKAGE_VERSION'),
                    new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_NODE_PACKAGE_VERSION'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutputS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatchVersion'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersionOutputConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MarkLatest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsLatestPatch'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageId'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PatchVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('RegisteredTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDescription'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTER_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTER_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplicationInstanceDependencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageObjects'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('PatchVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listApplicationInstanceNodeInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeInstances'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackagePatchVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listApplicationInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRuntimeContextDevice'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRuntimeContextDeviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuntimeContextStates'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeviceReportedStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeviceReportedTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeContextName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOP_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTALL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTALL_IN_PROGRESS'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Devices'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Brand'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentSoftware'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceAggregatedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestDeviceJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('LeaseExpirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisioningStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_PANORAMA'),
                            new \PHPStan\Type\Constant\ConstantStringType('LENOVO'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWAITING_PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LEASE_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OTA'),
                                new \PHPStan\Type\Constant\ConstantStringType('REBOOT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('VERIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOADING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWAITING_PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PANORAMA_APPLIANCE_DEVELOPER_KIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PANORAMA_APPLIANCE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDevicesJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OTA'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBOOT'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNodeFromTemplateJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeFromTemplateJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateType'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('RTSP_CAMERA_STREAM'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('PatchVersion'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_LOGIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('ML_MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SINK'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPackageImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageImportJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NODE_PACKAGE_VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_NODE_PACKAGE_VERSION'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Packages'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function provisionDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('IotThingName'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWAITING_PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
            ]),
        ]);
    }
    private function registerPackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeApplicationInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function signalApplicationInstanceNodeInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInstanceId'),
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
    private function updateDeviceMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}