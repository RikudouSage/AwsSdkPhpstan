<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class FMSClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\FMS\FMSClient>
     */
    public function getClass(): string
    {
        return \Aws\FMS\FMSClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAdminAccount',
            'associateThirdPartyFirewall',
            'batchAssociateResource',
            'batchDisassociateResource',
            'deleteAppsList',
            'deleteNotificationChannel',
            'deletePolicy',
            'deleteProtocolsList',
            'deleteResourceSet',
            'disassociateAdminAccount',
            'disassociateThirdPartyFirewall',
            'getAdminAccount',
            'getAdminScope',
            'getAppsList',
            'getComplianceDetail',
            'getNotificationChannel',
            'getPolicy',
            'getProtectionStatus',
            'getProtocolsList',
            'getResourceSet',
            'getThirdPartyFirewallAssociationStatus',
            'getViolationDetails',
            'listAdminAccountsForOrganization',
            'listAdminsManagingAccount',
            'listAppsLists',
            'listComplianceStatus',
            'listDiscoveredResources',
            'listMemberAccounts',
            'listPolicies',
            'listProtocolsLists',
            'listResourceSetResources',
            'listResourceSets',
            'listTagsForResource',
            'listThirdPartyFirewallFirewallPolicies',
            'putAdminAccount',
            'putAppsList',
            'putNotificationChannel',
            'putPolicy',
            'putProtocolsList',
            'putResourceSet',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAdminAccount' => $this->associateAdminAccount(),
            'associateThirdPartyFirewall' => $this->associateThirdPartyFirewall(),
            'batchAssociateResource' => $this->batchAssociateResource(),
            'batchDisassociateResource' => $this->batchDisassociateResource(),
            'deleteAppsList' => $this->deleteAppsList(),
            'deleteNotificationChannel' => $this->deleteNotificationChannel(),
            'deletePolicy' => $this->deletePolicy(),
            'deleteProtocolsList' => $this->deleteProtocolsList(),
            'deleteResourceSet' => $this->deleteResourceSet(),
            'disassociateAdminAccount' => $this->disassociateAdminAccount(),
            'disassociateThirdPartyFirewall' => $this->disassociateThirdPartyFirewall(),
            'getAdminAccount' => $this->getAdminAccount(),
            'getAdminScope' => $this->getAdminScope(),
            'getAppsList' => $this->getAppsList(),
            'getComplianceDetail' => $this->getComplianceDetail(),
            'getNotificationChannel' => $this->getNotificationChannel(),
            'getPolicy' => $this->getPolicy(),
            'getProtectionStatus' => $this->getProtectionStatus(),
            'getProtocolsList' => $this->getProtocolsList(),
            'getResourceSet' => $this->getResourceSet(),
            'getThirdPartyFirewallAssociationStatus' => $this->getThirdPartyFirewallAssociationStatus(),
            'getViolationDetails' => $this->getViolationDetails(),
            'listAdminAccountsForOrganization' => $this->listAdminAccountsForOrganization(),
            'listAdminsManagingAccount' => $this->listAdminsManagingAccount(),
            'listAppsLists' => $this->listAppsLists(),
            'listComplianceStatus' => $this->listComplianceStatus(),
            'listDiscoveredResources' => $this->listDiscoveredResources(),
            'listMemberAccounts' => $this->listMemberAccounts(),
            'listPolicies' => $this->listPolicies(),
            'listProtocolsLists' => $this->listProtocolsLists(),
            'listResourceSetResources' => $this->listResourceSetResources(),
            'listResourceSets' => $this->listResourceSets(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listThirdPartyFirewallFirewallPolicies' => $this->listThirdPartyFirewallFirewallPolicies(),
            'putAdminAccount' => $this->putAdminAccount(),
            'putAppsList' => $this->putAppsList(),
            'putNotificationChannel' => $this->putNotificationChannel(),
            'putPolicy' => $this->putPolicy(),
            'putProtocolsList' => $this->putProtocolsList(),
            'putResourceSet' => $this->putResourceSet(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function associateAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateThirdPartyFirewall(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EXIST'),
                ]),
            ]),
        ]);
    }
    private function batchAssociateResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_PARTITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_RESOURCE_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_ACCOUNT_ID'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDisassociateResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_PARTITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_RESOURCE_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_VALID_ACCOUNT_ID'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteAppsList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteNotificationChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProtocolsList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResourceSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateThirdPartyFirewall(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EXIST'),
                ]),
            ]),
        ]);
    }
    private function getAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdminAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function getAdminScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdminScope'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegionScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyTypeScope'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllAccountsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeSpecifiedAccounts'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllOrganizationalUnitsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeSpecifiedOrganizationalUnits'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllRegionsEnabled'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllPolicyTypesEnabled'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                                new \PHPStan\Type\Constant\ConstantStringType('WAFV2'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHIELD_ADVANCED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_COMMON'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_CONTENT_AUDIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_USAGE_AUDIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FIREWALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DNS_FIREWALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_FIREWALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPORT_NETWORK_FIREWALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ACL_COMMON'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDING_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARDING_COMPLETE'),
                ]),
            ]),
        ]);
    }
    private function getAppsList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppsList'),
                new \PHPStan\Type\Constant\ConstantStringType('AppsListArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListUpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousAppsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AppName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AppName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]))),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getComplianceDetail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyComplianceDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Violators'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IssueInfoMap'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViolationReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WEB_ACL_MISSING_RULE_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_MISSING_WEB_ACL'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_INCORRECT_WEB_ACL'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_MISSING_SHIELD_PROTECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_MISSING_WEB_ACL_OR_SHIELD_PROTECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_MISSING_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_VIOLATES_AUDIT_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_UNUSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_REDUNDANT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FMS_CREATED_SECURITY_GROUP_EDITED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_FIREWALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_FIREWALL_SUBNET_IN_AZ'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_EXPECTED_ROUTE_TABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FIREWALL_POLICY_MODIFIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FIREWALL_SUBNET_IS_OUT_OF_SCOPE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNET_GATEWAY_MISSING_EXPECTED_ROUTE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FIREWALL_SUBNET_MISSING_EXPECTED_ROUTE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNEXPECTED_FIREWALL_ROUTES'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNEXPECTED_TARGET_GATEWAY_ROUTES'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRAFFIC_INSPECTION_CROSSES_AZ_BOUNDARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_ROUTE_CONFIGURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_TARGET_GATEWAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNET_TRAFFIC_NOT_INSPECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLACK_HOLE_ROUTE_DETECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLACK_HOLE_ROUTE_DETECTED_IN_FIREWALL_SUBNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_MISSING_DNS_FIREWALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_HAS_OUT_OF_SCOPE_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FIREWALL_SUBNET_MISSING_VPCE_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_NETWORK_ACL_ENTRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEB_ACL_CONFIGURATION_OR_SCOPE_OF_USE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWSCONFIG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSWAF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSSHIELD_ADVANCED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSVPC'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getNotificationChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SnsRoleName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyUpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityServicePolicyData'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTypeList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludeResourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemediationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteUnusedFMManagedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeMap'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludeMap'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagLogicalOperator'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedServiceData'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyOption'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                            new \PHPStan\Type\Constant\ConstantStringType('WAFV2'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHIELD_ADVANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_COMMON'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_CONTENT_AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_USAGE_AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNS_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_NETWORK_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ACL_COMMON'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkAclCommonPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallDeploymentModel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CENTRALIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallDeploymentModel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CENTRALIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkAclEntrySet'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FirstEntries'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ForceRemediateForFirstEntries'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastEntries'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ForceRemediateForLastEntries'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                new \PHPStan\Type\Constant\ConstantStringType('To'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                new \PHPStan\Type\Constant\ConstantStringType('To'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORG_UNIT'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORG_UNIT'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_ADMIN_SCOPE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AND'),
                        new \PHPStan\Type\Constant\ConstantStringType('OR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getProtectionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdminAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceType'),
                new \PHPStan\Type\Constant\ConstantStringType('Data'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAFV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHIELD_ADVANCED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_COMMON'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_CONTENT_AUDIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_USAGE_AUDIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FIREWALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('DNS_FIREWALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_FIREWALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_NETWORK_FIREWALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ACL_COMMON'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getProtocolsList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolsList'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolsListArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListUpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtocolsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousProtocolsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourceSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTypeList'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSetStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_ADMIN_SCOPE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getThirdPartyFirewallAssociationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('MarketplaceOnboardingStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFBOARD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EXIST'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NO_SUBSCRIPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                ]),
            ]),
        ]);
    }
    private function getViolationDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ViolationDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceViolations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsVPCSecurityGroupViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2NetworkInterfaceViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2InstanceViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallMissingFirewallViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallMissingSubnetViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallMissingExpectedRTViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallPolicyModifiedViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallInternetTrafficNotInspectedViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallInvalidRouteConfigurationViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallBlackHoleRouteDetectedViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallUnexpectedFirewallRoutesViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallUnexpectedGatewayRoutesViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallMissingExpectedRoutesViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('DnsRuleGroupPriorityConflictViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('DnsDuplicateRuleGroupViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('DnsRuleGroupLimitExceededViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetIsOutOfScopeViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('RouteHasOutOfScopeEndpointViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallMissingFirewallViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallMissingSubnetViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallMissingExpectedRouteTableViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetMissingVPCEndpointViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidNetworkAclEntriesViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('PossibleRemediationActions'),
                            new \PHPStan\Type\Constant\ConstantStringType('WebACLHasIncompatibleConfigurationViolation'),
                            new \PHPStan\Type\Constant\ConstantStringType('WebACLHasOutOfScopeResourcesViolation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTargetDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartialMatches'),
                                new \PHPStan\Type\Constant\ConstantStringType('PossibleSecurityGroupRemediationActions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Reference'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetViolationReasons'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RemediationActionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RemediationResult'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IsDefaultAction'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4Range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6Range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatingSecurityGroups'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('AwsEc2NetworkInterfaceViolations'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ViolatingSecurityGroups'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetViolationReason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetViolationReason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedRouteTable'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentPolicyDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedPolicyDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessRuleGroups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessFragmentDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessCustomActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatefulRuleGroups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatefulDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatefulEngineOptions'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantStringType('DROP_TO_ALERT'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RuleOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StreamExceptionPolicy'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('STRICT_ORDER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_ACTION_ORDER'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FMS_IGNORE'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessRuleGroups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessFragmentDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessCustomActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatefulRuleGroups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatefulDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatefulEngineOptions'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantStringType('DROP_TO_ALERT'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RuleOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StreamExceptionPolicy'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('STRICT_ORDER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_ACTION_ORDER'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FMS_IGNORE'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatingRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsRouteTableUsedInDifferentAZ'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentFirewallSubnetRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedFirewallEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedFirewallSubnetRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActualFirewallSubnetRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternetGatewayId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentInternetGatewayRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedInternetGatewayRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActualInternetGatewayRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV4Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV6Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContributingSubnets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowedTargets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
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
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV4Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV6Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContributingSubnets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowedTargets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
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
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AffectedSubnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsRouteTableUsedInDifferentAZ'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatingRoute'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentFirewallSubnetRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedFirewallEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActualFirewallEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedFirewallSubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActualFirewallSubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedFirewallSubnetRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActualFirewallSubnetRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternetGatewayId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentInternetGatewayRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedInternetGatewayRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActualInternetGatewayRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV4Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV6Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContributingSubnets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowedTargets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
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
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV4Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV6Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContributingSubnets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowedTargets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
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
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatingRoutes'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatingRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatingRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV4Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpV6Cidr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContributingSubnets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowedTargets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
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
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTargetDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConflictingPriority'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConflictingPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnavailablePriorities'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTargetDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTargetDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfRuleGroupsAlreadyAssociated'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZoneId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatingRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZoneId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentFirewallSubnetRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetRoutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternetGatewayId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentInternetGatewayRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternetGatewayRoutes'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_LIST'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CARRIER_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VPC_PEERING_CONNECTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EGRESS_ONLY_INTERNET_GATEWAY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetViolationReason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetViolationReason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ViolationTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentRouteTable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedRouteTable'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallSubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZoneId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Vpc'),
                                new \PHPStan\Type\Constant\ConstantStringType('Subnet'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentAssociatedNetworkAcl'),
                                new \PHPStan\Type\Constant\ConstantStringType('EntryViolations'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedEntry'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedEvaluationOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ActualEvaluationOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EntryAtExpectedEvaluationOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EntriesWithConflicts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EntryViolationReasons'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EntryDetail'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EntryRuleNumber'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EntryType'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('To'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                                ]),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_FIRST_ENTRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_LAST_ENTRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ENTRY'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EntryDetail'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EntryRuleNumber'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EntryType'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('To'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                                ]),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_FIRST_ENTRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_LAST_ENTRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ENTRY'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('EntryDetail'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EntryRuleNumber'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EntryType'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                                    ], [
                                                        new \PHPStan\Type\IntegerType(),
                                                        new \PHPStan\Type\IntegerType(),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('To'),
                                                    ], [
                                                        new \PHPStan\Type\IntegerType(),
                                                        new \PHPStan\Type\IntegerType(),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                                    ]),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_FIRST_ENTRY'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_LAST_ENTRY'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ENTRY'),
                                                ]),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_EXPECTED_ENTRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('INCORRECT_ENTRY_ORDER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ENTRY_CONFLICT'),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OrderedRemediationActions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IsDefaultAction'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('RemediationAction'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Order'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EC2CreateRouteAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EC2ReplaceRouteAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EC2DeleteRouteAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EC2CopyRouteTableAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EC2ReplaceRouteTableAssociationAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EC2AssociateRouteTableAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('EC2CreateRouteTableAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('FMSPolicyUpdateFirewallCreationConfigAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CreateNetworkAclAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ReplaceNetworkAclAssociationAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CreateNetworkAclEntriesAction'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('DeleteNetworkAclEntriesAction'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPrefixListId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationIpv6CidrBlock'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPrefixListId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationIpv6CidrBlock'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPrefixListId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationIpv6CidrBlock'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('FirewallCreationConfig'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Vpc'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('FMSCanRemediate'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\BooleanType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkAclId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('FMSCanRemediate'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\BooleanType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkAclId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkAclEntriesToBeCreated'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('FMSCanRemediate'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('EntryDetail'),
                                                                new \PHPStan\Type\Constant\ConstantStringType('EntryRuleNumber'),
                                                                new \PHPStan\Type\Constant\ConstantStringType('EntryType'),
                                                            ], [
                                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                                                ], [
                                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                                                    ], [
                                                                        new \PHPStan\Type\IntegerType(),
                                                                        new \PHPStan\Type\IntegerType(),
                                                                    ]),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                                        new \PHPStan\Type\Constant\ConstantStringType('To'),
                                                                    ], [
                                                                        new \PHPStan\Type\IntegerType(),
                                                                        new \PHPStan\Type\IntegerType(),
                                                                    ]),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\UnionType([
                                                                        new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                                        new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                                                    ]),
                                                                    new \PHPStan\Type\BooleanType(),
                                                                ]),
                                                                new \PHPStan\Type\IntegerType(),
                                                                new \PHPStan\Type\UnionType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_FIRST_ENTRY'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_LAST_ENTRY'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ENTRY'),
                                                                ]),
                                                            ]),
                                                        ])),
                                                        new \PHPStan\Type\BooleanType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkAclId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkAclEntriesToBeDeleted'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('FMSCanRemediate'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ]),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('EntryDetail'),
                                                                new \PHPStan\Type\Constant\ConstantStringType('EntryRuleNumber'),
                                                                new \PHPStan\Type\Constant\ConstantStringType('EntryType'),
                                                            ], [
                                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                                                ], [
                                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                                                    ], [
                                                                        new \PHPStan\Type\IntegerType(),
                                                                        new \PHPStan\Type\IntegerType(),
                                                                    ]),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                                        new \PHPStan\Type\Constant\ConstantStringType('To'),
                                                                    ], [
                                                                        new \PHPStan\Type\IntegerType(),
                                                                        new \PHPStan\Type\IntegerType(),
                                                                    ]),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\UnionType([
                                                                        new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                                        new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                                                    ]),
                                                                    new \PHPStan\Type\BooleanType(),
                                                                ]),
                                                                new \PHPStan\Type\IntegerType(),
                                                                new \PHPStan\Type\UnionType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_FIRST_ENTRY'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('FMS_MANAGED_LAST_ENTRY'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ENTRY'),
                                                                ]),
                                                            ]),
                                                        ])),
                                                        new \PHPStan\Type\BooleanType(),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('WebACLArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('WebACLArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutOfScopeResourceList'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAdminAccountsForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdminAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdminAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultAdmin'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONBOARDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONBOARDING_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OFFBOARDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('OFFBOARDING_COMPLETE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAdminsManagingAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdminAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppsLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppsLists'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ListArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppsList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AppName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listComplianceStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyComplianceStatusList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemberAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationResults'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssueInfoMap'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ComplianceStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViolatorCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('EvaluationLimitExceeded'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLIANT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NON_COMPLIANT'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWSCONFIG'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWSWAF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWSSHIELD_ADVANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWSVPC'),
                        ]), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDiscoveredResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMemberAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MemberAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityServiceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemediationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteUnusedFMManagedResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                            new \PHPStan\Type\Constant\ConstantStringType('WAFV2'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHIELD_ADVANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_COMMON'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_CONTENT_AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_USAGE_AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNS_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_NETWORK_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ACL_COMMON'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_ADMIN_SCOPE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProtocolsLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolsLists'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ListArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProtocolsList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceSetResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceSetStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_ADMIN_SCOPE'),
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
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
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
    private function listThirdPartyFirewallFirewallPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallFirewallPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putAppsList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppsList'),
                new \PHPStan\Type\Constant\ConstantStringType('AppsListArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListUpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousAppsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AppName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AppName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]))),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putNotificationChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyUpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityServicePolicyData'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTypeList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludeResourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemediationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteUnusedFMManagedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeMap'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludeMap'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagLogicalOperator'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedServiceData'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyOption'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                            new \PHPStan\Type\Constant\ConstantStringType('WAFV2'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHIELD_ADVANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_COMMON'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_CONTENT_AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_USAGE_AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNS_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('THIRD_PARTY_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_NETWORK_FIREWALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ACL_COMMON'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFirewallPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThirdPartyFirewallPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkAclCommonPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallDeploymentModel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CENTRALIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallDeploymentModel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CENTRALIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkAclEntrySet'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FirstEntries'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ForceRemediateForFirstEntries'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastEntries'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ForceRemediateForLastEntries'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                new \PHPStan\Type\Constant\ConstantStringType('To'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('From'),
                                                new \PHPStan\Type\Constant\ConstantStringType('To'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORG_UNIT'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORG_UNIT'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_ADMIN_SCOPE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AND'),
                        new \PHPStan\Type\Constant\ConstantStringType('OR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putProtocolsList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolsList'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolsListArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListUpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtocolsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousProtocolsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ]))),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putResourceSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTypeList'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSetStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_ADMIN_SCOPE'),
                    ]),
                ]),
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
}