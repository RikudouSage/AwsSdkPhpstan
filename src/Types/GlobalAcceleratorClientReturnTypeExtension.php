<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GlobalAcceleratorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\GlobalAccelerator\GlobalAcceleratorClient>
     */
    public function getClass(): string
    {
        return \Aws\GlobalAccelerator\GlobalAcceleratorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addCustomRoutingEndpoints',
            'addEndpoints',
            'advertiseByoipCidr',
            'allowCustomRoutingTraffic',
            'createAccelerator',
            'createCrossAccountAttachment',
            'createCustomRoutingAccelerator',
            'createCustomRoutingEndpointGroup',
            'createCustomRoutingListener',
            'createEndpointGroup',
            'createListener',
            'deleteAccelerator',
            'deleteCrossAccountAttachment',
            'deleteCustomRoutingAccelerator',
            'deleteCustomRoutingEndpointGroup',
            'deleteCustomRoutingListener',
            'deleteEndpointGroup',
            'deleteListener',
            'denyCustomRoutingTraffic',
            'deprovisionByoipCidr',
            'describeAccelerator',
            'describeAcceleratorAttributes',
            'describeCrossAccountAttachment',
            'describeCustomRoutingAccelerator',
            'describeCustomRoutingAcceleratorAttributes',
            'describeCustomRoutingEndpointGroup',
            'describeCustomRoutingListener',
            'describeEndpointGroup',
            'describeListener',
            'listAccelerators',
            'listByoipCidrs',
            'listCrossAccountAttachments',
            'listCrossAccountResourceAccounts',
            'listCrossAccountResources',
            'listCustomRoutingAccelerators',
            'listCustomRoutingEndpointGroups',
            'listCustomRoutingListeners',
            'listCustomRoutingPortMappings',
            'listCustomRoutingPortMappingsByDestination',
            'listEndpointGroups',
            'listListeners',
            'listTagsForResource',
            'provisionByoipCidr',
            'removeCustomRoutingEndpoints',
            'removeEndpoints',
            'tagResource',
            'untagResource',
            'updateAccelerator',
            'updateAcceleratorAttributes',
            'updateCrossAccountAttachment',
            'updateCustomRoutingAccelerator',
            'updateCustomRoutingAcceleratorAttributes',
            'updateCustomRoutingListener',
            'updateEndpointGroup',
            'updateListener',
            'withdrawByoipCidr',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addCustomRoutingEndpoints' => $this->addCustomRoutingEndpoints(),
            'addEndpoints' => $this->addEndpoints(),
            'advertiseByoipCidr' => $this->advertiseByoipCidr(),
            'allowCustomRoutingTraffic' => $this->allowCustomRoutingTraffic(),
            'createAccelerator' => $this->createAccelerator(),
            'createCrossAccountAttachment' => $this->createCrossAccountAttachment(),
            'createCustomRoutingAccelerator' => $this->createCustomRoutingAccelerator(),
            'createCustomRoutingEndpointGroup' => $this->createCustomRoutingEndpointGroup(),
            'createCustomRoutingListener' => $this->createCustomRoutingListener(),
            'createEndpointGroup' => $this->createEndpointGroup(),
            'createListener' => $this->createListener(),
            'deleteAccelerator' => $this->deleteAccelerator(),
            'deleteCrossAccountAttachment' => $this->deleteCrossAccountAttachment(),
            'deleteCustomRoutingAccelerator' => $this->deleteCustomRoutingAccelerator(),
            'deleteCustomRoutingEndpointGroup' => $this->deleteCustomRoutingEndpointGroup(),
            'deleteCustomRoutingListener' => $this->deleteCustomRoutingListener(),
            'deleteEndpointGroup' => $this->deleteEndpointGroup(),
            'deleteListener' => $this->deleteListener(),
            'denyCustomRoutingTraffic' => $this->denyCustomRoutingTraffic(),
            'deprovisionByoipCidr' => $this->deprovisionByoipCidr(),
            'describeAccelerator' => $this->describeAccelerator(),
            'describeAcceleratorAttributes' => $this->describeAcceleratorAttributes(),
            'describeCrossAccountAttachment' => $this->describeCrossAccountAttachment(),
            'describeCustomRoutingAccelerator' => $this->describeCustomRoutingAccelerator(),
            'describeCustomRoutingAcceleratorAttributes' => $this->describeCustomRoutingAcceleratorAttributes(),
            'describeCustomRoutingEndpointGroup' => $this->describeCustomRoutingEndpointGroup(),
            'describeCustomRoutingListener' => $this->describeCustomRoutingListener(),
            'describeEndpointGroup' => $this->describeEndpointGroup(),
            'describeListener' => $this->describeListener(),
            'listAccelerators' => $this->listAccelerators(),
            'listByoipCidrs' => $this->listByoipCidrs(),
            'listCrossAccountAttachments' => $this->listCrossAccountAttachments(),
            'listCrossAccountResourceAccounts' => $this->listCrossAccountResourceAccounts(),
            'listCrossAccountResources' => $this->listCrossAccountResources(),
            'listCustomRoutingAccelerators' => $this->listCustomRoutingAccelerators(),
            'listCustomRoutingEndpointGroups' => $this->listCustomRoutingEndpointGroups(),
            'listCustomRoutingListeners' => $this->listCustomRoutingListeners(),
            'listCustomRoutingPortMappings' => $this->listCustomRoutingPortMappings(),
            'listCustomRoutingPortMappingsByDestination' => $this->listCustomRoutingPortMappingsByDestination(),
            'listEndpointGroups' => $this->listEndpointGroups(),
            'listListeners' => $this->listListeners(),
            'listTagsForResource' => $this->listTagsForResource(),
            'provisionByoipCidr' => $this->provisionByoipCidr(),
            'removeCustomRoutingEndpoints' => $this->removeCustomRoutingEndpoints(),
            'removeEndpoints' => $this->removeEndpoints(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccelerator' => $this->updateAccelerator(),
            'updateAcceleratorAttributes' => $this->updateAcceleratorAttributes(),
            'updateCrossAccountAttachment' => $this->updateCrossAccountAttachment(),
            'updateCustomRoutingAccelerator' => $this->updateCustomRoutingAccelerator(),
            'updateCustomRoutingAcceleratorAttributes' => $this->updateCustomRoutingAcceleratorAttributes(),
            'updateCustomRoutingListener' => $this->updateCustomRoutingListener(),
            'updateEndpointGroup' => $this->updateEndpointGroup(),
            'updateListener' => $this->updateListener(),
            'withdrawByoipCidr' => $this->withdrawByoipCidr(),
        };
    }
    private function addCustomRoutingEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthState'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientIPPreservationEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function advertiseByoipCidr(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ByoipCidr'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WITHDRAWING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_PROVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WITHDRAW'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPROVISION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function allowCustomRoutingTraffic(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DualStackDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createCrossAccountAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createCustomRoutingAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createCustomRoutingEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createCustomRoutingListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listener'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficDialPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortOverrides'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthState'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientIPPreservationEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listener'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientAffinity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCrossAccountAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCustomRoutingAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCustomRoutingEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCustomRoutingListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function denyCustomRoutingTraffic(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deprovisionByoipCidr(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ByoipCidr'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WITHDRAWING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_PROVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WITHDRAW'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPROVISION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DualStackDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeAcceleratorAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AcceleratorAttributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Prefix'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeCrossAccountAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeCustomRoutingAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeCustomRoutingAcceleratorAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AcceleratorAttributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Prefix'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeCustomRoutingEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeCustomRoutingListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listener'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficDialPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortOverrides'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthState'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientIPPreservationEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listener'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientAffinity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listAccelerators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerators'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DualStackDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listByoipCidrs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ByoipCidrs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WITHDRAWING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_PROVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WITHDRAW'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPROVISION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCrossAccountAttachments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountAttachments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCrossAccountResourceAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceOwnerAwsAccountIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listCrossAccountResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountResources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomRoutingAccelerators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerators'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomRoutingEndpointGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomRoutingListeners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomRoutingPortMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortMappings'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationSocketAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationTrafficState'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCustomRoutingPortMappingsByDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DestinationPortMappings'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorSocketAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationSocketAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationTrafficState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEndpointGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficDialPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortOverrides'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthState'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientIPPreservationEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listListeners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientAffinity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP'),
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
    private function provisionByoipCidr(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ByoipCidr'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WITHDRAWING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_PROVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WITHDRAW'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPROVISION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function removeCustomRoutingEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
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
    private function updateAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DualStackDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateAcceleratorAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AcceleratorAttributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Prefix'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateCrossAccountAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateCustomRoutingAccelerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accelerator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressFamily'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateCustomRoutingAcceleratorAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AcceleratorAttributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogsS3Prefix'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateCustomRoutingListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listener'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointGroupRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficDialPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortOverrides'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthState'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientIPPreservationEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listener'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientAffinity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function withdrawByoipCidr(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ByoipCidr'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WITHDRAWING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_PROVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ADVERTISING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WITHDRAW'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPROVISION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
}