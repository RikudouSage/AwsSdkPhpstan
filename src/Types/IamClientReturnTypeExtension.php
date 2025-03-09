<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IamClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Iam\IamClient>
     */
    public function getClass(): string
    {
        return \Aws\Iam\IamClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addClientIDToOpenIDConnectProvider',
            'addRoleToInstanceProfile',
            'addUserToGroup',
            'attachGroupPolicy',
            'attachRolePolicy',
            'attachUserPolicy',
            'changePassword',
            'createAccessKey',
            'createAccountAlias',
            'createGroup',
            'createInstanceProfile',
            'createLoginProfile',
            'createOpenIDConnectProvider',
            'createPolicy',
            'createPolicyVersion',
            'createRole',
            'createSAMLProvider',
            'createServiceLinkedRole',
            'createServiceSpecificCredential',
            'createUser',
            'createVirtualMFADevice',
            'deactivateMFADevice',
            'deleteAccessKey',
            'deleteAccountAlias',
            'deleteAccountPasswordPolicy',
            'deleteGroup',
            'deleteGroupPolicy',
            'deleteInstanceProfile',
            'deleteLoginProfile',
            'deleteOpenIDConnectProvider',
            'deletePolicy',
            'deletePolicyVersion',
            'deleteRole',
            'deleteRolePermissionsBoundary',
            'deleteRolePolicy',
            'deleteSAMLProvider',
            'deleteSSHPublicKey',
            'deleteServerCertificate',
            'deleteServiceLinkedRole',
            'deleteServiceSpecificCredential',
            'deleteSigningCertificate',
            'deleteUser',
            'deleteUserPermissionsBoundary',
            'deleteUserPolicy',
            'deleteVirtualMFADevice',
            'detachGroupPolicy',
            'detachRolePolicy',
            'detachUserPolicy',
            'disableOrganizationsRootCredentialsManagement',
            'disableOrganizationsRootSessions',
            'enableMFADevice',
            'enableOrganizationsRootCredentialsManagement',
            'enableOrganizationsRootSessions',
            'generateCredentialReport',
            'generateOrganizationsAccessReport',
            'generateServiceLastAccessedDetails',
            'getAccessKeyLastUsed',
            'getAccountAuthorizationDetails',
            'getAccountPasswordPolicy',
            'getAccountSummary',
            'getContextKeysForCustomPolicy',
            'getContextKeysForPrincipalPolicy',
            'getCredentialReport',
            'getGroup',
            'getGroupPolicy',
            'getInstanceProfile',
            'getLoginProfile',
            'getMFADevice',
            'getOpenIDConnectProvider',
            'getOrganizationsAccessReport',
            'getPolicy',
            'getPolicyVersion',
            'getRole',
            'getRolePolicy',
            'getSAMLProvider',
            'getSSHPublicKey',
            'getServerCertificate',
            'getServiceLastAccessedDetails',
            'getServiceLastAccessedDetailsWithEntities',
            'getServiceLinkedRoleDeletionStatus',
            'getUser',
            'getUserPolicy',
            'listAccessKeys',
            'listAccountAliases',
            'listAttachedGroupPolicies',
            'listAttachedRolePolicies',
            'listAttachedUserPolicies',
            'listEntitiesForPolicy',
            'listGroupPolicies',
            'listGroups',
            'listGroupsForUser',
            'listInstanceProfileTags',
            'listInstanceProfiles',
            'listInstanceProfilesForRole',
            'listMFADeviceTags',
            'listMFADevices',
            'listOpenIDConnectProviderTags',
            'listOpenIDConnectProviders',
            'listOrganizationsFeatures',
            'listPolicies',
            'listPoliciesGrantingServiceAccess',
            'listPolicyTags',
            'listPolicyVersions',
            'listRolePolicies',
            'listRoleTags',
            'listRoles',
            'listSAMLProviderTags',
            'listSAMLProviders',
            'listSSHPublicKeys',
            'listServerCertificateTags',
            'listServerCertificates',
            'listServiceSpecificCredentials',
            'listSigningCertificates',
            'listUserPolicies',
            'listUserTags',
            'listUsers',
            'listVirtualMFADevices',
            'putGroupPolicy',
            'putRolePermissionsBoundary',
            'putRolePolicy',
            'putUserPermissionsBoundary',
            'putUserPolicy',
            'removeClientIDFromOpenIDConnectProvider',
            'removeRoleFromInstanceProfile',
            'removeUserFromGroup',
            'resetServiceSpecificCredential',
            'resyncMFADevice',
            'setDefaultPolicyVersion',
            'setSecurityTokenServicePreferences',
            'simulateCustomPolicy',
            'simulatePrincipalPolicy',
            'tagInstanceProfile',
            'tagMFADevice',
            'tagOpenIDConnectProvider',
            'tagPolicy',
            'tagRole',
            'tagSAMLProvider',
            'tagServerCertificate',
            'tagUser',
            'untagInstanceProfile',
            'untagMFADevice',
            'untagOpenIDConnectProvider',
            'untagPolicy',
            'untagRole',
            'untagSAMLProvider',
            'untagServerCertificate',
            'untagUser',
            'updateAccessKey',
            'updateAccountPasswordPolicy',
            'updateAssumeRolePolicy',
            'updateGroup',
            'updateLoginProfile',
            'updateOpenIDConnectProviderThumbprint',
            'updateRole',
            'updateRoleDescription',
            'updateSAMLProvider',
            'updateSSHPublicKey',
            'updateServerCertificate',
            'updateServiceSpecificCredential',
            'updateSigningCertificate',
            'updateUser',
            'uploadSSHPublicKey',
            'uploadServerCertificate',
            'uploadSigningCertificate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addClientIDToOpenIDConnectProvider' => $this->addClientIDToOpenIDConnectProvider(),
            'addRoleToInstanceProfile' => $this->addRoleToInstanceProfile(),
            'addUserToGroup' => $this->addUserToGroup(),
            'attachGroupPolicy' => $this->attachGroupPolicy(),
            'attachRolePolicy' => $this->attachRolePolicy(),
            'attachUserPolicy' => $this->attachUserPolicy(),
            'changePassword' => $this->changePassword(),
            'createAccessKey' => $this->createAccessKey(),
            'createAccountAlias' => $this->createAccountAlias(),
            'createGroup' => $this->createGroup(),
            'createInstanceProfile' => $this->createInstanceProfile(),
            'createLoginProfile' => $this->createLoginProfile(),
            'createOpenIDConnectProvider' => $this->createOpenIDConnectProvider(),
            'createPolicy' => $this->createPolicy(),
            'createPolicyVersion' => $this->createPolicyVersion(),
            'createRole' => $this->createRole(),
            'createSAMLProvider' => $this->createSAMLProvider(),
            'createServiceLinkedRole' => $this->createServiceLinkedRole(),
            'createServiceSpecificCredential' => $this->createServiceSpecificCredential(),
            'createUser' => $this->createUser(),
            'createVirtualMFADevice' => $this->createVirtualMFADevice(),
            'deactivateMFADevice' => $this->deactivateMFADevice(),
            'deleteAccessKey' => $this->deleteAccessKey(),
            'deleteAccountAlias' => $this->deleteAccountAlias(),
            'deleteAccountPasswordPolicy' => $this->deleteAccountPasswordPolicy(),
            'deleteGroup' => $this->deleteGroup(),
            'deleteGroupPolicy' => $this->deleteGroupPolicy(),
            'deleteInstanceProfile' => $this->deleteInstanceProfile(),
            'deleteLoginProfile' => $this->deleteLoginProfile(),
            'deleteOpenIDConnectProvider' => $this->deleteOpenIDConnectProvider(),
            'deletePolicy' => $this->deletePolicy(),
            'deletePolicyVersion' => $this->deletePolicyVersion(),
            'deleteRole' => $this->deleteRole(),
            'deleteRolePermissionsBoundary' => $this->deleteRolePermissionsBoundary(),
            'deleteRolePolicy' => $this->deleteRolePolicy(),
            'deleteSAMLProvider' => $this->deleteSAMLProvider(),
            'deleteSSHPublicKey' => $this->deleteSSHPublicKey(),
            'deleteServerCertificate' => $this->deleteServerCertificate(),
            'deleteServiceLinkedRole' => $this->deleteServiceLinkedRole(),
            'deleteServiceSpecificCredential' => $this->deleteServiceSpecificCredential(),
            'deleteSigningCertificate' => $this->deleteSigningCertificate(),
            'deleteUser' => $this->deleteUser(),
            'deleteUserPermissionsBoundary' => $this->deleteUserPermissionsBoundary(),
            'deleteUserPolicy' => $this->deleteUserPolicy(),
            'deleteVirtualMFADevice' => $this->deleteVirtualMFADevice(),
            'detachGroupPolicy' => $this->detachGroupPolicy(),
            'detachRolePolicy' => $this->detachRolePolicy(),
            'detachUserPolicy' => $this->detachUserPolicy(),
            'disableOrganizationsRootCredentialsManagement' => $this->disableOrganizationsRootCredentialsManagement(),
            'disableOrganizationsRootSessions' => $this->disableOrganizationsRootSessions(),
            'enableMFADevice' => $this->enableMFADevice(),
            'enableOrganizationsRootCredentialsManagement' => $this->enableOrganizationsRootCredentialsManagement(),
            'enableOrganizationsRootSessions' => $this->enableOrganizationsRootSessions(),
            'generateCredentialReport' => $this->generateCredentialReport(),
            'generateOrganizationsAccessReport' => $this->generateOrganizationsAccessReport(),
            'generateServiceLastAccessedDetails' => $this->generateServiceLastAccessedDetails(),
            'getAccessKeyLastUsed' => $this->getAccessKeyLastUsed(),
            'getAccountAuthorizationDetails' => $this->getAccountAuthorizationDetails(),
            'getAccountPasswordPolicy' => $this->getAccountPasswordPolicy(),
            'getAccountSummary' => $this->getAccountSummary(),
            'getContextKeysForCustomPolicy' => $this->getContextKeysForCustomPolicy(),
            'getContextKeysForPrincipalPolicy' => $this->getContextKeysForPrincipalPolicy(),
            'getCredentialReport' => $this->getCredentialReport(),
            'getGroup' => $this->getGroup(),
            'getGroupPolicy' => $this->getGroupPolicy(),
            'getInstanceProfile' => $this->getInstanceProfile(),
            'getLoginProfile' => $this->getLoginProfile(),
            'getMFADevice' => $this->getMFADevice(),
            'getOpenIDConnectProvider' => $this->getOpenIDConnectProvider(),
            'getOrganizationsAccessReport' => $this->getOrganizationsAccessReport(),
            'getPolicy' => $this->getPolicy(),
            'getPolicyVersion' => $this->getPolicyVersion(),
            'getRole' => $this->getRole(),
            'getRolePolicy' => $this->getRolePolicy(),
            'getSAMLProvider' => $this->getSAMLProvider(),
            'getSSHPublicKey' => $this->getSSHPublicKey(),
            'getServerCertificate' => $this->getServerCertificate(),
            'getServiceLastAccessedDetails' => $this->getServiceLastAccessedDetails(),
            'getServiceLastAccessedDetailsWithEntities' => $this->getServiceLastAccessedDetailsWithEntities(),
            'getServiceLinkedRoleDeletionStatus' => $this->getServiceLinkedRoleDeletionStatus(),
            'getUser' => $this->getUser(),
            'getUserPolicy' => $this->getUserPolicy(),
            'listAccessKeys' => $this->listAccessKeys(),
            'listAccountAliases' => $this->listAccountAliases(),
            'listAttachedGroupPolicies' => $this->listAttachedGroupPolicies(),
            'listAttachedRolePolicies' => $this->listAttachedRolePolicies(),
            'listAttachedUserPolicies' => $this->listAttachedUserPolicies(),
            'listEntitiesForPolicy' => $this->listEntitiesForPolicy(),
            'listGroupPolicies' => $this->listGroupPolicies(),
            'listGroups' => $this->listGroups(),
            'listGroupsForUser' => $this->listGroupsForUser(),
            'listInstanceProfileTags' => $this->listInstanceProfileTags(),
            'listInstanceProfiles' => $this->listInstanceProfiles(),
            'listInstanceProfilesForRole' => $this->listInstanceProfilesForRole(),
            'listMFADeviceTags' => $this->listMFADeviceTags(),
            'listMFADevices' => $this->listMFADevices(),
            'listOpenIDConnectProviderTags' => $this->listOpenIDConnectProviderTags(),
            'listOpenIDConnectProviders' => $this->listOpenIDConnectProviders(),
            'listOrganizationsFeatures' => $this->listOrganizationsFeatures(),
            'listPolicies' => $this->listPolicies(),
            'listPoliciesGrantingServiceAccess' => $this->listPoliciesGrantingServiceAccess(),
            'listPolicyTags' => $this->listPolicyTags(),
            'listPolicyVersions' => $this->listPolicyVersions(),
            'listRolePolicies' => $this->listRolePolicies(),
            'listRoleTags' => $this->listRoleTags(),
            'listRoles' => $this->listRoles(),
            'listSAMLProviderTags' => $this->listSAMLProviderTags(),
            'listSAMLProviders' => $this->listSAMLProviders(),
            'listSSHPublicKeys' => $this->listSSHPublicKeys(),
            'listServerCertificateTags' => $this->listServerCertificateTags(),
            'listServerCertificates' => $this->listServerCertificates(),
            'listServiceSpecificCredentials' => $this->listServiceSpecificCredentials(),
            'listSigningCertificates' => $this->listSigningCertificates(),
            'listUserPolicies' => $this->listUserPolicies(),
            'listUserTags' => $this->listUserTags(),
            'listUsers' => $this->listUsers(),
            'listVirtualMFADevices' => $this->listVirtualMFADevices(),
            'putGroupPolicy' => $this->putGroupPolicy(),
            'putRolePermissionsBoundary' => $this->putRolePermissionsBoundary(),
            'putRolePolicy' => $this->putRolePolicy(),
            'putUserPermissionsBoundary' => $this->putUserPermissionsBoundary(),
            'putUserPolicy' => $this->putUserPolicy(),
            'removeClientIDFromOpenIDConnectProvider' => $this->removeClientIDFromOpenIDConnectProvider(),
            'removeRoleFromInstanceProfile' => $this->removeRoleFromInstanceProfile(),
            'removeUserFromGroup' => $this->removeUserFromGroup(),
            'resetServiceSpecificCredential' => $this->resetServiceSpecificCredential(),
            'resyncMFADevice' => $this->resyncMFADevice(),
            'setDefaultPolicyVersion' => $this->setDefaultPolicyVersion(),
            'setSecurityTokenServicePreferences' => $this->setSecurityTokenServicePreferences(),
            'simulateCustomPolicy' => $this->simulateCustomPolicy(),
            'simulatePrincipalPolicy' => $this->simulatePrincipalPolicy(),
            'tagInstanceProfile' => $this->tagInstanceProfile(),
            'tagMFADevice' => $this->tagMFADevice(),
            'tagOpenIDConnectProvider' => $this->tagOpenIDConnectProvider(),
            'tagPolicy' => $this->tagPolicy(),
            'tagRole' => $this->tagRole(),
            'tagSAMLProvider' => $this->tagSAMLProvider(),
            'tagServerCertificate' => $this->tagServerCertificate(),
            'tagUser' => $this->tagUser(),
            'untagInstanceProfile' => $this->untagInstanceProfile(),
            'untagMFADevice' => $this->untagMFADevice(),
            'untagOpenIDConnectProvider' => $this->untagOpenIDConnectProvider(),
            'untagPolicy' => $this->untagPolicy(),
            'untagRole' => $this->untagRole(),
            'untagSAMLProvider' => $this->untagSAMLProvider(),
            'untagServerCertificate' => $this->untagServerCertificate(),
            'untagUser' => $this->untagUser(),
            'updateAccessKey' => $this->updateAccessKey(),
            'updateAccountPasswordPolicy' => $this->updateAccountPasswordPolicy(),
            'updateAssumeRolePolicy' => $this->updateAssumeRolePolicy(),
            'updateGroup' => $this->updateGroup(),
            'updateLoginProfile' => $this->updateLoginProfile(),
            'updateOpenIDConnectProviderThumbprint' => $this->updateOpenIDConnectProviderThumbprint(),
            'updateRole' => $this->updateRole(),
            'updateRoleDescription' => $this->updateRoleDescription(),
            'updateSAMLProvider' => $this->updateSAMLProvider(),
            'updateSSHPublicKey' => $this->updateSSHPublicKey(),
            'updateServerCertificate' => $this->updateServerCertificate(),
            'updateServiceSpecificCredential' => $this->updateServiceSpecificCredential(),
            'updateSigningCertificate' => $this->updateSigningCertificate(),
            'updateUser' => $this->updateUser(),
            'uploadSSHPublicKey' => $this->uploadSSHPublicKey(),
            'uploadServerCertificate' => $this->uploadServerCertificate(),
            'uploadSigningCertificate' => $this->uploadSigningCertificate(),
        };
    }
    private function addClientIDToOpenIDConnectProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function addRoleToInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function addUserToGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function attachGroupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function attachRolePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function attachUserPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function changePassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createAccessKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createAccountAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Group'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
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
    private function createLoginProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoginProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordResetRequired'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createOpenIDConnectProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpenIDConnectProviderArn'),
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
    private function createPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryUsageCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsAttachable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function createPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createSAMLProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SAMLProviderArn'),
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
    private function createServiceLinkedRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createServiceSpecificCredential(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSpecificCredential'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServicePassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceSpecificCredentialId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordLastUsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
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
    private function createVirtualMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VirtualMFADevice'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Base32StringSeed'),
                    new \PHPStan\Type\Constant\ConstantStringType('QRCodePNG'),
                    new \PHPStan\Type\Constant\ConstantStringType('User'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('PasswordLastUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function deactivateMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccountAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccountPasswordPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteGroupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLoginProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteOpenIDConnectProvider(): ?\PHPStan\Type\Type
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
    private function deletePolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRolePermissionsBoundary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRolePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSAMLProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSSHPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteServerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteServiceLinkedRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletionTaskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteServiceSpecificCredential(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSigningCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUserPermissionsBoundary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUserPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVirtualMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function detachGroupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function detachRolePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function detachUserPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disableOrganizationsRootCredentialsManagement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnabledFeatures'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RootCredentialsManagement'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootSessions'),
                ])),
            ]),
        ]);
    }
    private function disableOrganizationsRootSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnabledFeatures'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RootCredentialsManagement'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootSessions'),
                ])),
            ]),
        ]);
    }
    private function enableMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableOrganizationsRootCredentialsManagement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnabledFeatures'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RootCredentialsManagement'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootSessions'),
                ])),
            ]),
        ]);
    }
    private function enableOrganizationsRootSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnabledFeatures'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RootCredentialsManagement'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootSessions'),
                ])),
            ]),
        ]);
    }
    private function generateCredentialReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateOrganizationsAccessReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateServiceLastAccessedDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessKeyLastUsed(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessKeyLastUsed'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAccountAuthorizationDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserDetailList'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupDetailList'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleDetailList'),
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPolicyList'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupList'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachedManagedPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupPolicyList'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachedManagedPolicies'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileList'),
                    new \PHPStan\Type\Constant\ConstantStringType('RolePolicyList'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachedManagedPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryUsageCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsAttachable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Document'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccountPasswordPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PasswordPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumPasswordLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireSymbols'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireNumbers'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireUppercaseCharacters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireLowercaseCharacters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowUsersToChangePassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirePasswords'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxPasswordAge'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordReusePrevention'),
                    new \PHPStan\Type\Constant\ConstantStringType('HardExpiry'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getAccountSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryMap'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Users'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsersQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupsQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificatesQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPolicySizeQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupPolicySizeQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupsPerUserQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningCertificatesPerUserQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeysPerUserQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFADevices'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFADevicesInUse'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountMFAEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountAccessKeysPresent'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountPasswordPresent'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountSigningCertificatesPresent'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachedPoliciesPerGroupQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachedPoliciesPerRoleQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachedPoliciesPerUserQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoliciesQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicySizeQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionsInUse'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionsInUseQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionsPerPolicyQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalEndpointTokenVersion'),
                ]), new \PHPStan\Type\IntegerType()),
            ]),
        ]);
    }
    private function getContextKeysForCustomPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContextKeyNames'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getContextKeysForPrincipalPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContextKeyNames'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getCredentialReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('ReportFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('GeneratedTime'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('text/csv'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Group'),
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordLastUsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGroupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
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
    private function getLoginProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoginProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordResetRequired'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Certifications'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getOpenIDConnectProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientIDList'),
                new \PHPStan\Type\Constant\ConstantStringType('ThumbprintList'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function getOrganizationsAccessReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('JobCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('JobCompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfServicesAccessible'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfServicesNotAccessed'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAuthenticatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalAuthenticatedEntities'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryUsageCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsAttachable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function getPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRolePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSAMLProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SAMLProviderUUID'),
                new \PHPStan\Type\Constant\ConstantStringType('SAMLMetadataDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ValidUntil'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('AssertionEncryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                    new \PHPStan\Type\Constant\ConstantStringType('Allowed'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function getSSHPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKeyBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getServerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerCertificate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateChain'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function getServiceLastAccessedDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                new \PHPStan\Type\Constant\ConstantStringType('JobCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ServicesLastAccessed'),
                new \PHPStan\Type\Constant\ConstantStringType('JobCompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE_LEVEL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTION_LEVEL'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAuthenticated'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAuthenticatedEntity'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAuthenticatedRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalAuthenticatedEntities'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrackedActionsLastAccessed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastAccessedEntity'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastAccessedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastAccessedRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServiceLastAccessedDetailsWithEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('JobCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('JobCompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('EntityDetailsList'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EntityInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAuthenticated'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServiceLinkedRoleDeletionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Reason'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleUsageList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordLastUsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
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
    private function getUserPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccessKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessKeyMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccountAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountAliases'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAttachedGroupPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttachedPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAttachedRolePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttachedPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAttachedUserPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttachedPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntitiesForPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyUsers'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyRoles'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroupPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroupsForUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceProfileTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceProfiles'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceProfilesForRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceProfiles'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMFADeviceTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMFADevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MFADevices'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOpenIDConnectProviderTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOpenIDConnectProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpenIDConnectProviderList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listOrganizationsFeatures(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnabledFeatures'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RootCredentialsManagement'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootSessions'),
                ])),
            ]),
        ]);
    }
    private function listPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryUsageCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsAttachable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPoliciesGrantingServiceAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoliciesGrantingServiceAccess'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicyTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicyVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Versions'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRolePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoleTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSAMLProviderTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSAMLProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SAMLProviderList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidUntil'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listSSHPublicKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServerCertificateTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServerCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateMetadataList'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceSpecificCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSpecificCredentials'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceSpecificCredentialId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSigningCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUserPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUserTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordLastUsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVirtualMFADevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VirtualMFADevices'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Base32StringSeed'),
                    new \PHPStan\Type\Constant\ConstantStringType('QRCodePNG'),
                    new \PHPStan\Type\Constant\ConstantStringType('User'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('PasswordLastUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putGroupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putRolePermissionsBoundary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putRolePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putUserPermissionsBoundary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putUserPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeClientIDFromOpenIDConnectProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeRoleFromInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeUserFromGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function resetServiceSpecificCredential(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSpecificCredential'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServicePassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceSpecificCredentialId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function resyncMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setDefaultPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setSecurityTokenServicePreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function simulateCustomPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationResults'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvalActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvalResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvalDecision'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchedStatements'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingContextValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationsDecisionDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryDecisionDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvalDecisionDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSpecificResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                        new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                        new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndPosition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                            new \PHPStan\Type\Constant\ConstantStringType('group'),
                            new \PHPStan\Type\Constant\ConstantStringType('role'),
                            new \PHPStan\Type\Constant\ConstantStringType('aws-managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('user-managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Line'),
                            new \PHPStan\Type\Constant\ConstantStringType('Column'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Line'),
                            new \PHPStan\Type\Constant\ConstantStringType('Column'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedByOrganizations'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedByPermissionsBoundary'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                        new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                        new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EvalResourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvalResourceDecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchedStatements'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingContextValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvalDecisionDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryDecisionDetail'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                            new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartPosition'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndPosition'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('user'),
                                new \PHPStan\Type\Constant\ConstantStringType('group'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                                new \PHPStan\Type\Constant\ConstantStringType('aws-managed'),
                                new \PHPStan\Type\Constant\ConstantStringType('user-managed'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Line'),
                                new \PHPStan\Type\Constant\ConstantStringType('Column'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Line'),
                                new \PHPStan\Type\Constant\ConstantStringType('Column'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                            new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedByPermissionsBoundary'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function simulatePrincipalPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationResults'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvalActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvalResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvalDecision'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchedStatements'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingContextValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationsDecisionDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryDecisionDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvalDecisionDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSpecificResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                        new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                        new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndPosition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                            new \PHPStan\Type\Constant\ConstantStringType('group'),
                            new \PHPStan\Type\Constant\ConstantStringType('role'),
                            new \PHPStan\Type\Constant\ConstantStringType('aws-managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('user-managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Line'),
                            new \PHPStan\Type\Constant\ConstantStringType('Column'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Line'),
                            new \PHPStan\Type\Constant\ConstantStringType('Column'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedByOrganizations'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedByPermissionsBoundary'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                        new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                        new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EvalResourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvalResourceDecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchedStatements'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingContextValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvalDecisionDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryDecisionDetail'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                            new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourcePolicyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartPosition'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndPosition'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('user'),
                                new \PHPStan\Type\Constant\ConstantStringType('group'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                                new \PHPStan\Type\Constant\ConstantStringType('aws-managed'),
                                new \PHPStan\Type\Constant\ConstantStringType('user-managed'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Line'),
                                new \PHPStan\Type\Constant\ConstantStringType('Column'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Line'),
                                new \PHPStan\Type\Constant\ConstantStringType('Column'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('explicitDeny'),
                            new \PHPStan\Type\Constant\ConstantStringType('implicitDeny'),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedByPermissionsBoundary'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagOpenIDConnectProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagSAMLProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagServerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagInstanceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagMFADevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagOpenIDConnectProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagSAMLProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagServerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAccessKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAccountPasswordPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAssumeRolePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateLoginProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateOpenIDConnectProviderThumbprint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRoleDescription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Role'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleLastUsed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryPolicy'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSAMLProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SAMLProviderArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSSHPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateServerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateServiceSpecificCredential(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateSigningCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function uploadSSHPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHPublicKeyBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function uploadServerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
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
    private function uploadSigningCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}