<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ShieldClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Shield\ShieldClient>
     */
    public function getClass(): string
    {
        return \Aws\Shield\ShieldClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateDRTLogBucket',
            'associateDRTRole',
            'associateHealthCheck',
            'associateProactiveEngagementDetails',
            'createProtection',
            'createProtectionGroup',
            'createSubscription',
            'deleteProtection',
            'deleteProtectionGroup',
            'deleteSubscription',
            'describeAttack',
            'describeAttackStatistics',
            'describeDRTAccess',
            'describeEmergencyContactSettings',
            'describeProtection',
            'describeProtectionGroup',
            'describeSubscription',
            'disableApplicationLayerAutomaticResponse',
            'disableProactiveEngagement',
            'disassociateDRTLogBucket',
            'disassociateDRTRole',
            'disassociateHealthCheck',
            'enableApplicationLayerAutomaticResponse',
            'enableProactiveEngagement',
            'getSubscriptionState',
            'listAttacks',
            'listProtectionGroups',
            'listProtections',
            'listResourcesInProtectionGroup',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateApplicationLayerAutomaticResponse',
            'updateEmergencyContactSettings',
            'updateProtectionGroup',
            'updateSubscription',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateDRTLogBucket' => $this->associateDRTLogBucket(),
            'associateDRTRole' => $this->associateDRTRole(),
            'associateHealthCheck' => $this->associateHealthCheck(),
            'associateProactiveEngagementDetails' => $this->associateProactiveEngagementDetails(),
            'createProtection' => $this->createProtection(),
            'createProtectionGroup' => $this->createProtectionGroup(),
            'createSubscription' => $this->createSubscription(),
            'deleteProtection' => $this->deleteProtection(),
            'deleteProtectionGroup' => $this->deleteProtectionGroup(),
            'deleteSubscription' => $this->deleteSubscription(),
            'describeAttack' => $this->describeAttack(),
            'describeAttackStatistics' => $this->describeAttackStatistics(),
            'describeDRTAccess' => $this->describeDRTAccess(),
            'describeEmergencyContactSettings' => $this->describeEmergencyContactSettings(),
            'describeProtection' => $this->describeProtection(),
            'describeProtectionGroup' => $this->describeProtectionGroup(),
            'describeSubscription' => $this->describeSubscription(),
            'disableApplicationLayerAutomaticResponse' => $this->disableApplicationLayerAutomaticResponse(),
            'disableProactiveEngagement' => $this->disableProactiveEngagement(),
            'disassociateDRTLogBucket' => $this->disassociateDRTLogBucket(),
            'disassociateDRTRole' => $this->disassociateDRTRole(),
            'disassociateHealthCheck' => $this->disassociateHealthCheck(),
            'enableApplicationLayerAutomaticResponse' => $this->enableApplicationLayerAutomaticResponse(),
            'enableProactiveEngagement' => $this->enableProactiveEngagement(),
            'getSubscriptionState' => $this->getSubscriptionState(),
            'listAttacks' => $this->listAttacks(),
            'listProtectionGroups' => $this->listProtectionGroups(),
            'listProtections' => $this->listProtections(),
            'listResourcesInProtectionGroup' => $this->listResourcesInProtectionGroup(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApplicationLayerAutomaticResponse' => $this->updateApplicationLayerAutomaticResponse(),
            'updateEmergencyContactSettings' => $this->updateEmergencyContactSettings(),
            'updateProtectionGroup' => $this->updateProtectionGroup(),
            'updateSubscription' => $this->updateSubscription(),
        };
    }
    private function associateDRTLogBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateDRTRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateHealthCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateProactiveEngagementDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProtectionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProtectionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAttack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attack'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttackCounters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttackProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mitigations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttackVectors'),
                        new \PHPStan\Type\Constant\ConstantStringType('Counters'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IP'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VectorType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VectorCounters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                new \PHPStan\Type\Constant\ConstantStringType('N'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                        new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttackLayer'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttackPropertyIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopContributors'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Total'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DESTINATION_URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REFERRER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE_ASN'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE_COUNTRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE_USER_AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORDPRESS_PINGBACK_REFLECTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORDPRESS_PINGBACK_SOURCE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BITS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BYTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PACKETS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MitigationName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeAttackStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TimeRange'),
                new \PHPStan\Type\Constant\ConstantStringType('DataItems'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FromInclusive'),
                    new \PHPStan\Type\Constant\ConstantStringType('ToExclusive'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttackVolume'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttackCount'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('PacketsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestsPerSecond'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function describeDRTAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LogBucketList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeEmergencyContactSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EmergencyContactList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactNotes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Protection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationLayerAutomaticResponseConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeProtectionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectionGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Aggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARBITRARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BY_RESOURCE_TYPE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDFRONT_DISTRIBUTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53_HOSTED_ZONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_IP_ALLOCATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLASSIC_LOAD_BALANCER'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_LOAD_BALANCER'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLOBAL_ACCELERATOR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Subscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeCommitmentInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoRenew'),
                    new \PHPStan\Type\Constant\ConstantStringType('Limits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProactiveEngagementStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionArn'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProtectionLimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProtectionGroupLimits'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProtectedResourceTypeLimits'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxProtectionGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('PatternTypeLimits'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ArbitraryPatternLimits'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxMembers'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disableApplicationLayerAutomaticResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableProactiveEngagement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateDRTLogBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateDRTRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateHealthCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableApplicationLayerAutomaticResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableProactiveEngagement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getSubscriptionState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
            ]),
        ]);
    }
    private function listAttacks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttackSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttackVectors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VectorType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProtectionGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectionGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Aggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARBITRARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BY_RESOURCE_TYPE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDFRONT_DISTRIBUTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53_HOSTED_ZONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_IP_ALLOCATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLASSIC_LOAD_BALANCER'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_LOAD_BALANCER'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLOBAL_ACCELERATOR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProtections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Protections'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationLayerAutomaticResponseConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourcesInProtectionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
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
    private function updateApplicationLayerAutomaticResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEmergencyContactSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateProtectionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}