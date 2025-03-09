<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ElasticLoadBalancingClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ElasticLoadBalancing\ElasticLoadBalancingClient>
     */
    public function getClass(): string
    {
        return \Aws\ElasticLoadBalancing\ElasticLoadBalancingClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTags',
            'applySecurityGroupsToLoadBalancer',
            'attachLoadBalancerToSubnets',
            'configureHealthCheck',
            'createAppCookieStickinessPolicy',
            'createLBCookieStickinessPolicy',
            'createLoadBalancer',
            'createLoadBalancerListeners',
            'createLoadBalancerPolicy',
            'deleteLoadBalancer',
            'deleteLoadBalancerListeners',
            'deleteLoadBalancerPolicy',
            'deregisterInstancesFromLoadBalancer',
            'describeAccountLimits',
            'describeInstanceHealth',
            'describeLoadBalancerAttributes',
            'describeLoadBalancerPolicies',
            'describeLoadBalancerPolicyTypes',
            'describeLoadBalancers',
            'describeTags',
            'detachLoadBalancerFromSubnets',
            'disableAvailabilityZonesForLoadBalancer',
            'enableAvailabilityZonesForLoadBalancer',
            'modifyLoadBalancerAttributes',
            'registerInstancesWithLoadBalancer',
            'removeTags',
            'setLoadBalancerListenerSSLCertificate',
            'setLoadBalancerPoliciesForBackendServer',
            'setLoadBalancerPoliciesOfListener',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTags' => $this->addTags(),
            'applySecurityGroupsToLoadBalancer' => $this->applySecurityGroupsToLoadBalancer(),
            'attachLoadBalancerToSubnets' => $this->attachLoadBalancerToSubnets(),
            'configureHealthCheck' => $this->configureHealthCheck(),
            'createAppCookieStickinessPolicy' => $this->createAppCookieStickinessPolicy(),
            'createLBCookieStickinessPolicy' => $this->createLBCookieStickinessPolicy(),
            'createLoadBalancer' => $this->createLoadBalancer(),
            'createLoadBalancerListeners' => $this->createLoadBalancerListeners(),
            'createLoadBalancerPolicy' => $this->createLoadBalancerPolicy(),
            'deleteLoadBalancer' => $this->deleteLoadBalancer(),
            'deleteLoadBalancerListeners' => $this->deleteLoadBalancerListeners(),
            'deleteLoadBalancerPolicy' => $this->deleteLoadBalancerPolicy(),
            'deregisterInstancesFromLoadBalancer' => $this->deregisterInstancesFromLoadBalancer(),
            'describeAccountLimits' => $this->describeAccountLimits(),
            'describeInstanceHealth' => $this->describeInstanceHealth(),
            'describeLoadBalancerAttributes' => $this->describeLoadBalancerAttributes(),
            'describeLoadBalancerPolicies' => $this->describeLoadBalancerPolicies(),
            'describeLoadBalancerPolicyTypes' => $this->describeLoadBalancerPolicyTypes(),
            'describeLoadBalancers' => $this->describeLoadBalancers(),
            'describeTags' => $this->describeTags(),
            'detachLoadBalancerFromSubnets' => $this->detachLoadBalancerFromSubnets(),
            'disableAvailabilityZonesForLoadBalancer' => $this->disableAvailabilityZonesForLoadBalancer(),
            'enableAvailabilityZonesForLoadBalancer' => $this->enableAvailabilityZonesForLoadBalancer(),
            'modifyLoadBalancerAttributes' => $this->modifyLoadBalancerAttributes(),
            'registerInstancesWithLoadBalancer' => $this->registerInstancesWithLoadBalancer(),
            'removeTags' => $this->removeTags(),
            'setLoadBalancerListenerSSLCertificate' => $this->setLoadBalancerListenerSSLCertificate(),
            'setLoadBalancerPoliciesForBackendServer' => $this->setLoadBalancerPoliciesForBackendServer(),
            'setLoadBalancerPoliciesOfListener' => $this->setLoadBalancerPoliciesOfListener(),
        };
    }
    private function addTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function applySecurityGroupsToLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function attachLoadBalancerToSubnets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function configureHealthCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createAppCookieStickinessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createLBCookieStickinessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DNSName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLoadBalancerListeners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createLoadBalancerPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLoadBalancerListeners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLoadBalancerPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterInstancesFromLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeAccountLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Limits'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Max'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstanceHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceStates'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeLoadBalancerAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerAttributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CrossZoneLoadBalancing'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessLog'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionDraining'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmitInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketPrefix'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdleTimeout'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeLoadBalancerPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyDescriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyAttributeDescriptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeLoadBalancerPolicyTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyTypeDescriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyAttributeTypeDescriptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cardinality'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeLoadBalancers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DNSName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CanonicalHostedZoneName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CanonicalHostedZoneNameID'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackendServerDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scheme'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Listener'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceProtocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstancePort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLCertificateId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppCookieStickinessPolicies'),
                        new \PHPStan\Type\Constant\ConstantStringType('LBCookieStickinessPolicies'),
                        new \PHPStan\Type\Constant\ConstantStringType('OtherPolicies'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('CookieName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('CookieExpirationPeriod'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstancePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAlias'),
                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagDescriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function detachLoadBalancerFromSubnets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function disableAvailabilityZonesForLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function enableAvailabilityZonesForLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function modifyLoadBalancerAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerAttributes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CrossZoneLoadBalancing'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessLog'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionDraining'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmitInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketPrefix'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdleTimeout'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function registerInstancesWithLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function removeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setLoadBalancerListenerSSLCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setLoadBalancerPoliciesForBackendServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setLoadBalancerPoliciesOfListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}