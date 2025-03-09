<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SnowBallClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SnowBall\SnowBallClient>
     */
    public function getClass(): string
    {
        return \Aws\SnowBall\SnowBallClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelCluster',
            'cancelJob',
            'createAddress',
            'createCluster',
            'createJob',
            'createLongTermPricing',
            'createReturnShippingLabel',
            'describeAddress',
            'describeAddresses',
            'describeCluster',
            'describeJob',
            'describeReturnShippingLabel',
            'getJobManifest',
            'getJobUnlockCode',
            'getSnowballUsage',
            'getSoftwareUpdates',
            'listClusterJobs',
            'listClusters',
            'listCompatibleImages',
            'listJobs',
            'listLongTermPricing',
            'listPickupLocations',
            'listServiceVersions',
            'updateCluster',
            'updateJob',
            'updateJobShipmentState',
            'updateLongTermPricing',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelCluster' => $this->cancelCluster(),
            'cancelJob' => $this->cancelJob(),
            'createAddress' => $this->createAddress(),
            'createCluster' => $this->createCluster(),
            'createJob' => $this->createJob(),
            'createLongTermPricing' => $this->createLongTermPricing(),
            'createReturnShippingLabel' => $this->createReturnShippingLabel(),
            'describeAddress' => $this->describeAddress(),
            'describeAddresses' => $this->describeAddresses(),
            'describeCluster' => $this->describeCluster(),
            'describeJob' => $this->describeJob(),
            'describeReturnShippingLabel' => $this->describeReturnShippingLabel(),
            'getJobManifest' => $this->getJobManifest(),
            'getJobUnlockCode' => $this->getJobUnlockCode(),
            'getSnowballUsage' => $this->getSnowballUsage(),
            'getSoftwareUpdates' => $this->getSoftwareUpdates(),
            'listClusterJobs' => $this->listClusterJobs(),
            'listClusters' => $this->listClusters(),
            'listCompatibleImages' => $this->listCompatibleImages(),
            'listJobs' => $this->listJobs(),
            'listLongTermPricing' => $this->listLongTermPricing(),
            'listPickupLocations' => $this->listPickupLocations(),
            'listServiceVersions' => $this->listServiceVersions(),
            'updateCluster' => $this->updateCluster(),
            'updateJob' => $this->updateJob(),
            'updateJobShipmentState' => $this->updateJobShipmentState(),
            'updateLongTermPricing' => $this->updateLongTermPricing(),
        };
    }
    private function cancelCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddressId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobListEntries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobState'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsMaster'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowballType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('New'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_C'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_CG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_S'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_HDD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_SSD'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5C'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5S'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACK_5U_C'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLongTermPricing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createReturnShippingLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
            ]),
        ]);
    }
    private function describeAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AddressId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Company'),
                    new \PHPStan\Type\Constant\ConstantStringType('Street1'),
                    new \PHPStan\Type\Constant\ConstantStringType('Street2'),
                    new \PHPStan\Type\Constant\ConstantStringType('Street3'),
                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateOrProvince'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrefectureOrDistrict'),
                    new \PHPStan\Type\Constant\ConstantStringType('Landmark'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsRestricted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUST_PICKUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SHIP'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeAddresses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Addresses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AddressId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Company'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street3'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateOrProvince'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrefectureOrDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmark'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsRestricted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUST_PICKUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SHIP'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterState'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnowballType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShippingOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notification'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForwardingAddressId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaxDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDeviceServiceConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AwaitingQuorum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE_C'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE_CG'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE_S'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNC1_HDD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNC1_SSD'),
                        new \PHPStan\Type\Constant\ConstantStringType('V3_5C'),
                        new \PHPStan\Type\Constant\ConstantStringType('V3_5S'),
                        new \PHPStan\Type\Constant\ConstantStringType('RACK_5U_C'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2AmiResources'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyRange'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOnDeviceServices'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginMarker'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndMarker'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TransferOption'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NFS_ON_DEVICE_SERVICE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3_ON_DEVICE_SERVICE'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventTriggers'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EventResourceARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AmiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnowballAmiId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SECOND_DAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEXT_DAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnsTopicARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatesToNotify'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotifyAll'),
                        new \PHPStan\Type\Constant\ConstantStringType('DevicePickupSnsTopicARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('New'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                                new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                                new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                                new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                                new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IND'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GSTIN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NFSOnDeviceService'),
                        new \PHPStan\Type\Constant\ConstantStringType('TGWOnDeviceService'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKSOnDeviceService'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3OnDeviceService'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('TB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('TB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKSAnywhereVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('FaultTolerance'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('TB'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('SubJobMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobState'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnowballType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShippingDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnowballCapacityPreference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notification'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobLogInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForwardingAddressId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaxDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemoteManagement'),
                    new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDeviceServiceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImpactLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('PickupDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnowballId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('New'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                        new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                        new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                        new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                        new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE_C'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE_CG'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE_S'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNC1_HDD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNC1_SSD'),
                        new \PHPStan\Type\Constant\ConstantStringType('V3_5C'),
                        new \PHPStan\Type\Constant\ConstantStringType('V3_5S'),
                        new \PHPStan\Type\Constant\ConstantStringType('RACK_5U_C'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2AmiResources'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyRange'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOnDeviceServices'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeginMarker'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndMarker'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TransferOption'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NFS_ON_DEVICE_SERVICE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3_ON_DEVICE_SERVICE'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventTriggers'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EventResourceARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AmiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnowballAmiId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ShippingOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundShipment'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundShipment'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SECOND_DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEXT_DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrackingNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrackingNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('T50'),
                        new \PHPStan\Type\Constant\ConstantStringType('T80'),
                        new \PHPStan\Type\Constant\ConstantStringType('T100'),
                        new \PHPStan\Type\Constant\ConstantStringType('T42'),
                        new \PHPStan\Type\Constant\ConstantStringType('T98'),
                        new \PHPStan\Type\Constant\ConstantStringType('T8'),
                        new \PHPStan\Type\Constant\ConstantStringType('T14'),
                        new \PHPStan\Type\Constant\ConstantStringType('T32'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoPreference'),
                        new \PHPStan\Type\Constant\ConstantStringType('T240'),
                        new \PHPStan\Type\Constant\ConstantStringType('T13'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnsTopicARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatesToNotify'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotifyAll'),
                        new \PHPStan\Type\Constant\ConstantStringType('DevicePickupSnsTopicARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('New'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                                new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                                new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                                new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                                new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BytesTransferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectsTransferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalObjects'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobCompletionReportURI'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobSuccessLogURI'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobFailureLogURI'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IND'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GSTIN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnowconeDeviceConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('WirelessConnection'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IsWifiEnabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLED_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLED_AUTOSTART'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_INSTALLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NFSOnDeviceService'),
                        new \PHPStan\Type\Constant\ConstantStringType('TGWOnDeviceService'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKSOnDeviceService'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3OnDeviceService'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('TB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('TB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKSAnywhereVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('FaultTolerance'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('TB'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IL2'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL4'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL5'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL6'),
                        new \PHPStan\Type\Constant\ConstantStringType('IL99'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Email'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentificationNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentificationExpirationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentificationIssuingOrg'),
                        new \PHPStan\Type\Constant\ConstantStringType('DevicePickupId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobState'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowballType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShippingDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowballCapacityPreference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Notification'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobLogInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardingAddressId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaxDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoteManagement'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDeviceServiceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImpactLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('PickupDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowballId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('New'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_C'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_CG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_S'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_HDD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_SSD'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5C'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5S'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACK_5U_C'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Resources'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaResources'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2AmiResources'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyRange'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetOnDeviceServices'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BeginMarker'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EndMarker'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TransferOption'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NFS_ON_DEVICE_SERVICE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3_ON_DEVICE_SERVICE'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventTriggers'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EventResourceARN'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AmiId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SnowballAmiId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ShippingOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('InboundShipment'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutboundShipment'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SECOND_DAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEXT_DAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXPRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrackingNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrackingNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('T50'),
                            new \PHPStan\Type\Constant\ConstantStringType('T80'),
                            new \PHPStan\Type\Constant\ConstantStringType('T100'),
                            new \PHPStan\Type\Constant\ConstantStringType('T42'),
                            new \PHPStan\Type\Constant\ConstantStringType('T98'),
                            new \PHPStan\Type\Constant\ConstantStringType('T8'),
                            new \PHPStan\Type\Constant\ConstantStringType('T14'),
                            new \PHPStan\Type\Constant\ConstantStringType('T32'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoPreference'),
                            new \PHPStan\Type\Constant\ConstantStringType('T240'),
                            new \PHPStan\Type\Constant\ConstantStringType('T13'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnsTopicARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobStatesToNotify'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotifyAll'),
                            new \PHPStan\Type\Constant\ConstantStringType('DevicePickupSnsTopicARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('New'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BytesTransferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectsTransferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalObjects'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('JobCompletionReportURI'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobSuccessLogURI'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobFailureLogURI'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IND'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GSTIN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnowconeDeviceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('WirelessConnection'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IsWifiEnabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLED_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLED_AUTOSTART'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_INSTALLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NFSOnDeviceService'),
                            new \PHPStan\Type\Constant\ConstantStringType('TGWOnDeviceService'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKSOnDeviceService'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3OnDeviceService'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('TB'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('TB'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('EKSAnywhereVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('FaultTolerance'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantStringType('TB'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IL2'),
                            new \PHPStan\Type\Constant\ConstantStringType('IL4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IL5'),
                            new \PHPStan\Type\Constant\ConstantStringType('IL6'),
                            new \PHPStan\Type\Constant\ConstantStringType('IL99'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('Email'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentificationNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentificationExpirationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentificationIssuingOrg'),
                            new \PHPStan\Type\Constant\ConstantStringType('DevicePickupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeReturnShippingLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ReturnShippingLabelURI'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getJobManifest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManifestURI'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getJobUnlockCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnlockCode'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSnowballUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnowballLimit'),
                new \PHPStan\Type\Constant\ConstantStringType('SnowballsInUse'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getSoftwareUpdates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdatesURI'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClusterJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobListEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobState'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsMaster'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowballType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('New'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_C'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_CG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_S'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_HDD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_SSD'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5C'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5S'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACK_5U_C'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterListEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterState'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwaitingQuorum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InUse'),
                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCompatibleImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleImages'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobListEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobState'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsMaster'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowballType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('New'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingAppliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreparingShipment'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithCustomer'),
                            new \PHPStan\Type\Constant\ConstantStringType('InTransitToAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWSSortingFacility'),
                            new \PHPStan\Type\Constant\ConstantStringType('WithAWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Listing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_USE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_C'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_CG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_S'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_HDD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_SSD'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5C'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5S'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACK_5U_C'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLongTermPricing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingEndDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingStartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentActiveJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplacementJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsLongTermPricingAutoRenew'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongTermPricingStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowballType'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OneYear'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThreeYear'),
                            new \PHPStan\Type\Constant\ConstantStringType('OneMonth'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_C'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_CG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE_S'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_HDD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNC1_SSD'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5C'),
                            new \PHPStan\Type\Constant\ConstantStringType('V3_5S'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACK_5U_C'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPickupLocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Addresses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AddressId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Company'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street3'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateOrProvince'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrefectureOrDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Landmark'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsRestricted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUST_PICKUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SHIP'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                new \PHPStan\Type\Constant\ConstantStringType('DependentServices'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('KUBERNETES'),
                    new \PHPStan\Type\Constant\ConstantStringType('EKS_ANYWHERE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceVersion'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KUBERNETES'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKS_ANYWHERE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateJobShipmentState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLongTermPricing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}