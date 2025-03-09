<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class OutpostsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Outposts\OutpostsClient>
     */
    public function getClass(): string
    {
        return \Aws\Outposts\OutpostsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelCapacityTask',
            'cancelOrder',
            'createOrder',
            'createOutpost',
            'createSite',
            'deleteOutpost',
            'deleteSite',
            'getCapacityTask',
            'getCatalogItem',
            'getConnection',
            'getOrder',
            'getOutpost',
            'getOutpostInstanceTypes',
            'getOutpostSupportedInstanceTypes',
            'getSite',
            'getSiteAddress',
            'listAssetInstances',
            'listAssets',
            'listBlockingInstancesForCapacityTask',
            'listCapacityTasks',
            'listCatalogItems',
            'listOrders',
            'listOutposts',
            'listSites',
            'listTagsForResource',
            'startCapacityTask',
            'startConnection',
            'tagResource',
            'untagResource',
            'updateOutpost',
            'updateSite',
            'updateSiteAddress',
            'updateSiteRackPhysicalProperties',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelCapacityTask' => $this->cancelCapacityTask(),
            'cancelOrder' => $this->cancelOrder(),
            'createOrder' => $this->createOrder(),
            'createOutpost' => $this->createOutpost(),
            'createSite' => $this->createSite(),
            'deleteOutpost' => $this->deleteOutpost(),
            'deleteSite' => $this->deleteSite(),
            'getCapacityTask' => $this->getCapacityTask(),
            'getCatalogItem' => $this->getCatalogItem(),
            'getConnection' => $this->getConnection(),
            'getOrder' => $this->getOrder(),
            'getOutpost' => $this->getOutpost(),
            'getOutpostInstanceTypes' => $this->getOutpostInstanceTypes(),
            'getOutpostSupportedInstanceTypes' => $this->getOutpostSupportedInstanceTypes(),
            'getSite' => $this->getSite(),
            'getSiteAddress' => $this->getSiteAddress(),
            'listAssetInstances' => $this->listAssetInstances(),
            'listAssets' => $this->listAssets(),
            'listBlockingInstancesForCapacityTask' => $this->listBlockingInstancesForCapacityTask(),
            'listCapacityTasks' => $this->listCapacityTasks(),
            'listCatalogItems' => $this->listCatalogItems(),
            'listOrders' => $this->listOrders(),
            'listOutposts' => $this->listOutposts(),
            'listSites' => $this->listSites(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startCapacityTask' => $this->startCapacityTask(),
            'startConnection' => $this->startConnection(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateOutpost' => $this->updateOutpost(),
            'updateSite' => $this->updateSite(),
            'updateSiteAddress' => $this->updateSiteAddress(),
            'updateSiteRackPhysicalProperties' => $this->updateSiteRackPhysicalProperties(),
        };
    }
    private function cancelCapacityTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelOrder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createOrder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Order'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LineItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderSubmissionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderFulfilledDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentTerm'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RECEIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULFILLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogItemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LineItemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShipmentInformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssetInformationList'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreviousLineItemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreviousOrderId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHIPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELIVERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLACED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ShipmentTrackingNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('ShipmentCarrier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DHL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DBS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEDEX'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXPEDITORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('MacAddressList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FIVE_YEARS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUTPOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLACEMENT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createOutpost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Outpost'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifeCycleStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedHardwareType'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createSite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Site'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressStateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RackPhysicalProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PowerDrawKva'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerPhase'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerFeedDrop'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkGbps'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FiberOpticCableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpticalStandard'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumSupportedWeightLbs'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_5_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_10_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_15_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_30_KVA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('THREE_PHASE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('L6_30P'),
                            new \PHPStan\Type\Constant\ConstantStringType('IEC309'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH530P7W'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH532P6W'),
                            new \PHPStan\Type\Constant\ConstantStringType('CS8365C'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ABOVE_RACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('BELOW_RACK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_1G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_10G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_40G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_100G'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_4'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_6'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_7'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_8'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_12'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_16'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTI_MODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_IR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_LR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_ESR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_IR4_LR4L'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_SR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_CWDM4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100G_PSM4_MSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_LX'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_SX'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_LIMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1400_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1600_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1800_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_2000_LBS'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteOutpost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getCapacityTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CapacityTaskId'),
                new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestedInstancePools'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesToExclude'),
                new \PHPStan\Type\Constant\ConstantStringType('DryRun'),
                new \PHPStan\Type\Constant\ConstantStringType('CapacityTaskStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskActionOnBlockingInstances'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Services'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTICACHE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                    ])),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_EVACUATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLATION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_CAPACITY_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNEXPECTED_ASSET_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKING_INSTANCES_NOT_EVACUATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAIT_FOR_EVACUATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL_TASK'),
                ]),
            ]),
        ]);
    }
    private function getCatalogItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CatalogItem'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CatalogItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2Capacities'),
                    new \PHPStan\Type\Constant\ConstantStringType('PowerKva'),
                    new \PHPStan\Type\Constant\ConstantStringType('WeightLbs'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedUplinkGbps'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONTINUED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Family'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBS'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClientPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientTunnelAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerTunnelAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedIps'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getOrder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Order'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LineItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderSubmissionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderFulfilledDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentTerm'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RECEIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULFILLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogItemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LineItemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShipmentInformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssetInformationList'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreviousLineItemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreviousOrderId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHIPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELIVERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLACED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ShipmentTrackingNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('ShipmentCarrier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DHL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DBS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FEDEX'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXPEDITORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('MacAddressList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FIVE_YEARS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUTPOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLACEMENT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getOutpost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Outpost'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifeCycleStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedHardwareType'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getOutpostInstanceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VCPUs'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getOutpostSupportedInstanceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VCPUs'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Site'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressStateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RackPhysicalProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PowerDrawKva'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerPhase'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerFeedDrop'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkGbps'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FiberOpticCableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpticalStandard'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumSupportedWeightLbs'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_5_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_10_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_15_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_30_KVA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('THREE_PHASE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('L6_30P'),
                            new \PHPStan\Type\Constant\ConstantStringType('IEC309'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH530P7W'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH532P6W'),
                            new \PHPStan\Type\Constant\ConstantStringType('CS8365C'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ABOVE_RACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('BELOW_RACK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_1G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_10G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_40G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_100G'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_4'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_6'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_7'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_8'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_12'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_16'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTI_MODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_IR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_LR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_ESR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_IR4_LR4L'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_SR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_CWDM4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100G_PSM4_MSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_LX'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_SX'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_LIMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1400_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1600_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1800_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_2000_LBS'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSiteAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                new \PHPStan\Type\Constant\ConstantStringType('AddressType'),
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_ADDRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPERATING_ADDRESS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine2'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine3'),
                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistrictOrCounty'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Municipality'),
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
                ]),
            ]),
        ]);
    }
    private function listAssetInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssetInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTICACHE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssetLocation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPUTE'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HostId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilies'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceTypeCapacities'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVcpus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETIRING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RackElevation'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBlockingInstancesForCapacityTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BlockingInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTICACHE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCapacityTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CapacityTasks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_EVACUATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCatalogItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CatalogItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CatalogItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2Capacities'),
                    new \PHPStan\Type\Constant\ConstantStringType('PowerKva'),
                    new \PHPStan\Type\Constant\ConstantStringType('WeightLbs'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedUplinkGbps'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONTINUED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Family'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBS'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Orders'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LineItemCountsByStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderSubmissionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderFulfilledDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OUTPOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLACEMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RECEIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULFILLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLACED'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOutposts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Outposts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifeCycleStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedHardwareType'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSites(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sites'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressStateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RackPhysicalProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PowerDrawKva'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerPhase'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerFeedDrop'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkGbps'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FiberOpticCableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpticalStandard'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumSupportedWeightLbs'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_5_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_10_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_15_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_30_KVA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('THREE_PHASE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('L6_30P'),
                            new \PHPStan\Type\Constant\ConstantStringType('IEC309'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH530P7W'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH532P6W'),
                            new \PHPStan\Type\Constant\ConstantStringType('CS8365C'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ABOVE_RACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('BELOW_RACK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_1G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_10G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_40G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_100G'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_4'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_6'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_7'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_8'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_12'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_16'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTI_MODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_IR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_LR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_ESR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_IR4_LR4L'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_SR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_CWDM4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100G_PSM4_MSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_LX'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_SX'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_LIMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1400_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1600_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1800_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_2000_LBS'),
                        ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startCapacityTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CapacityTaskId'),
                new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestedInstancePools'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesToExclude'),
                new \PHPStan\Type\Constant\ConstantStringType('DryRun'),
                new \PHPStan\Type\Constant\ConstantStringType('CapacityTaskStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskActionOnBlockingInstances'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Services'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTICACHE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                    ])),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_EVACUATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLATION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_CAPACITY_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNEXPECTED_ASSET_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKING_INSTANCES_NOT_EVACUATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAIT_FOR_EVACUATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL_TASK'),
                ]),
            ]),
        ]);
    }
    private function startConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('UnderlayIpAddress'),
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateOutpost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Outpost'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifeCycleStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedHardwareType'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Site'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressStateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RackPhysicalProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PowerDrawKva'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerPhase'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerFeedDrop'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkGbps'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FiberOpticCableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpticalStandard'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumSupportedWeightLbs'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_5_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_10_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_15_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_30_KVA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('THREE_PHASE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('L6_30P'),
                            new \PHPStan\Type\Constant\ConstantStringType('IEC309'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH530P7W'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH532P6W'),
                            new \PHPStan\Type\Constant\ConstantStringType('CS8365C'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ABOVE_RACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('BELOW_RACK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_1G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_10G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_40G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_100G'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_4'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_6'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_7'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_8'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_12'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_16'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTI_MODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_IR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_LR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_ESR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_IR4_LR4L'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_SR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_CWDM4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100G_PSM4_MSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_LX'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_SX'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_LIMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1400_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1600_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1800_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_2000_LBS'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSiteAddress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddressType'),
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_ADDRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPERATING_ADDRESS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine2'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine3'),
                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistrictOrCounty'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Municipality'),
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
                ]),
            ]),
        ]);
    }
    private function updateSiteRackPhysicalProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Site'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressStateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingAddressCity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RackPhysicalProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PowerDrawKva'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerPhase'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('PowerFeedDrop'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkGbps'),
                        new \PHPStan\Type\Constant\ConstantStringType('UplinkCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FiberOpticCableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpticalStandard'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumSupportedWeightLbs'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_5_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_10_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_15_KVA'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER_30_KVA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PHASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('THREE_PHASE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('L6_30P'),
                            new \PHPStan\Type\Constant\ConstantStringType('IEC309'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH530P7W'),
                            new \PHPStan\Type\Constant\ConstantStringType('AH532P6W'),
                            new \PHPStan\Type\Constant\ConstantStringType('CS8365C'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ABOVE_RACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('BELOW_RACK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_1G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_10G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_40G'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_100G'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_4'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_6'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_7'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_8'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_12'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPLINK_COUNT_16'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTI_MODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_IR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_10GBASE_LR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_ESR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_IR4_LR4L'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_40GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_SR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_CWDM4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100GBASE_LR4'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_100G_PSM4_MSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_LX'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIC_1000BASE_SX'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_LIMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1400_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1600_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_1800_LBS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_2000_LBS'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
}