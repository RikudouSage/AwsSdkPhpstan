<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class NetworkFirewallClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\NetworkFirewall\NetworkFirewallClient>
     */
    public function getClass(): string
    {
        return \Aws\NetworkFirewall\NetworkFirewallClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateFirewallPolicy',
            'associateSubnets',
            'createFirewall',
            'createFirewallPolicy',
            'createRuleGroup',
            'createTLSInspectionConfiguration',
            'deleteFirewall',
            'deleteFirewallPolicy',
            'deleteResourcePolicy',
            'deleteRuleGroup',
            'deleteTLSInspectionConfiguration',
            'describeFirewall',
            'describeFirewallPolicy',
            'describeLoggingConfiguration',
            'describeResourcePolicy',
            'describeRuleGroup',
            'describeRuleGroupMetadata',
            'describeTLSInspectionConfiguration',
            'disassociateSubnets',
            'getAnalysisReportResults',
            'listAnalysisReports',
            'listFirewallPolicies',
            'listFirewalls',
            'listRuleGroups',
            'listTLSInspectionConfigurations',
            'listTagsForResource',
            'putResourcePolicy',
            'startAnalysisReport',
            'tagResource',
            'untagResource',
            'updateFirewallAnalysisSettings',
            'updateFirewallDeleteProtection',
            'updateFirewallDescription',
            'updateFirewallEncryptionConfiguration',
            'updateFirewallPolicy',
            'updateFirewallPolicyChangeProtection',
            'updateLoggingConfiguration',
            'updateRuleGroup',
            'updateSubnetChangeProtection',
            'updateTLSInspectionConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateFirewallPolicy' => $this->associateFirewallPolicy(),
            'associateSubnets' => $this->associateSubnets(),
            'createFirewall' => $this->createFirewall(),
            'createFirewallPolicy' => $this->createFirewallPolicy(),
            'createRuleGroup' => $this->createRuleGroup(),
            'createTLSInspectionConfiguration' => $this->createTLSInspectionConfiguration(),
            'deleteFirewall' => $this->deleteFirewall(),
            'deleteFirewallPolicy' => $this->deleteFirewallPolicy(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteRuleGroup' => $this->deleteRuleGroup(),
            'deleteTLSInspectionConfiguration' => $this->deleteTLSInspectionConfiguration(),
            'describeFirewall' => $this->describeFirewall(),
            'describeFirewallPolicy' => $this->describeFirewallPolicy(),
            'describeLoggingConfiguration' => $this->describeLoggingConfiguration(),
            'describeResourcePolicy' => $this->describeResourcePolicy(),
            'describeRuleGroup' => $this->describeRuleGroup(),
            'describeRuleGroupMetadata' => $this->describeRuleGroupMetadata(),
            'describeTLSInspectionConfiguration' => $this->describeTLSInspectionConfiguration(),
            'disassociateSubnets' => $this->disassociateSubnets(),
            'getAnalysisReportResults' => $this->getAnalysisReportResults(),
            'listAnalysisReports' => $this->listAnalysisReports(),
            'listFirewallPolicies' => $this->listFirewallPolicies(),
            'listFirewalls' => $this->listFirewalls(),
            'listRuleGroups' => $this->listRuleGroups(),
            'listTLSInspectionConfigurations' => $this->listTLSInspectionConfigurations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'startAnalysisReport' => $this->startAnalysisReport(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateFirewallAnalysisSettings' => $this->updateFirewallAnalysisSettings(),
            'updateFirewallDeleteProtection' => $this->updateFirewallDeleteProtection(),
            'updateFirewallDescription' => $this->updateFirewallDescription(),
            'updateFirewallEncryptionConfiguration' => $this->updateFirewallEncryptionConfiguration(),
            'updateFirewallPolicy' => $this->updateFirewallPolicy(),
            'updateFirewallPolicyChangeProtection' => $this->updateFirewallPolicyChangeProtection(),
            'updateLoggingConfiguration' => $this->updateLoggingConfiguration(),
            'updateRuleGroup' => $this->updateRuleGroup(),
            'updateSubnetChangeProtection' => $this->updateSubnetChangeProtection(),
            'updateTLSInspectionConfiguration' => $this->updateTLSInspectionConfiguration(),
        };
    }
    private function associateFirewallPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateSubnets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetMappings'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPAddressType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFirewall(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Firewall'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetMappings'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetChangeProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyChangeProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledAnalysisTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddressType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_SNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_HOST'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSyncStateSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncStates'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUsageSummary'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_CONSTRAINED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCALING'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SyncStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                                new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_CONSTRAINED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CIDRs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailableCIDRCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('UtilizedCIDRCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPSetReferences'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ResolvedCIDRCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createFirewallPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatelessRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatefulRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STATELESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATEFUL'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceUpdateToken'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedRuleIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisDetail'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_FORWARDING_ASYMMETRICALLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_CONTAINS_TCP_FLAGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createTLSInspectionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthority'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteFirewall(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Firewall'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetMappings'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetChangeProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyChangeProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledAnalysisTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddressType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_SNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_HOST'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSyncStateSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncStates'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUsageSummary'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_CONSTRAINED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCALING'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SyncStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                                new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_CONSTRAINED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CIDRs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailableCIDRCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('UtilizedCIDRCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPSetReferences'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ResolvedCIDRCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteFirewallPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyResponse'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatelessRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatefulRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupResponse'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STATELESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATEFUL'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceUpdateToken'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedRuleIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisDetail'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_FORWARDING_ASYMMETRICALLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_CONTAINS_TCP_FLAGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteTLSInspectionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationResponse'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthority'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeFirewall(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Firewall'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetMappings'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetChangeProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyChangeProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledAnalysisTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddressType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_SNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_HOST'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSyncStateSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncStates'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUsageSummary'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_CONSTRAINED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCALING'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SyncStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                                new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_CONSTRAINED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CIDRs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailableCIDRCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('UtilizedCIDRCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPSetReferences'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ResolvedCIDRCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeFirewallPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatelessRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatefulRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatelessRuleGroupReferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatelessDefaultActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatelessFragmentDefaultActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatelessCustomActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatefulRuleGroupReferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatefulDefaultActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatefulEngineOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVariables'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionDefinition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublishMetricAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DROP_TO_ALERT'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleOrder'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamExceptionPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlowTimeouts'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_ACTION_ORDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRICT_ORDER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TcpIdleTimeoutSeconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleVariables'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogDestinationConfigs'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDestination'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisDataFirehose'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReferenceSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('RulesSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatefulRuleOptions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPSets'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortSets'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPSetReferences'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RulesString'),
                        new \PHPStan\Type\Constant\ConstantStringType('RulesSourceList'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatefulRules'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatelessRulesAndCustomActions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetTypes'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneratedRulesType'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_SNI'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_HOST'),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOWLIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENYLIST'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                            new \PHPStan\Type\Constant\ConstantStringType('Header'),
                            new \PHPStan\Type\Constant\ConstantStringType('RuleOptions'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourcePort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ICMP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FTP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SMB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DCERPC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SMTP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IMAP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MSN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KRB5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IKEV2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TFTP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NTP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DHCP'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FORWARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Keyword'),
                                new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StatelessRules'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomActions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RuleDefinition'),
                                new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchAttributes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SourcePorts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPorts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TCPFlags'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AddressDefinition'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AddressDefinition'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Flags'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Masks'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FIN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SYN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RST'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PSH'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ACK'),
                                                new \PHPStan\Type\Constant\ConstantStringType('URG'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ECE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CWR'),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FIN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SYN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RST'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PSH'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ACK'),
                                                new \PHPStan\Type\Constant\ConstantStringType('URG'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ECE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CWR'),
                                            ])),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionDefinition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PublishMetricAction'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleOrder'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_ACTION_ORDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRICT_ORDER'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STATELESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATEFUL'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceUpdateToken'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedRuleIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisDetail'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_FORWARDING_ASYMMETRICALLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_CONTAINS_TCP_FLAGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeRuleGroupMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                new \PHPStan\Type\Constant\ConstantStringType('StatefulRuleOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STATELESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('STATEFUL'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleOrder'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_ACTION_ORDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRICT_ORDER'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeTLSInspectionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateConfigurations'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerCertificates'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scopes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckCertificateRevocationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                            new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourcePorts'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationPorts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AddressDefinition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AddressDefinition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RevokedStatusAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnknownStatusAction'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthority'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disassociateSubnets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetMappings'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPAddressType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAnalysisReportResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ReportTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisType'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisReportResults'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_SNI'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_HOST'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirstAccessed'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAccessed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hits'),
                    new \PHPStan\Type\Constant\ConstantStringType('UniqueSources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listAnalysisReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisReports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisReportId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_SNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_HOST'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFirewallPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listFirewalls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Firewalls'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listRuleGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTLSInspectionConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
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
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startAnalysisReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisReportId'),
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
    private function updateFirewallAnalysisSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnabledAnalysisTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_SNI'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_HOST'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFirewallDeleteProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('DeleteProtection'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFirewallDescription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFirewallEncryptionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateFirewallPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatelessRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedStatefulRuleCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateFirewallPolicyChangeProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyChangeProtection'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogDestinationConfigs'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDestination'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisDataFirehose'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalysisResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STATELESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATEFUL'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceUpdateToken'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedRuleIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifiedType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisDetail'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_FORWARDING_ASYMMETRICALLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATELESS_RULE_CONTAINS_TCP_FLAGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateSubnetChangeProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetChangeProtection'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateTLSInspectionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSInspectionConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthority'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSerial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
}