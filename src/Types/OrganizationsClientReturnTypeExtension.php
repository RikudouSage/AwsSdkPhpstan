<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class OrganizationsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Organizations\OrganizationsClient>
     */
    public function getClass(): string
    {
        return \Aws\Organizations\OrganizationsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptHandshake',
            'attachPolicy',
            'cancelHandshake',
            'closeAccount',
            'createAccount',
            'createGovCloudAccount',
            'createOrganization',
            'createOrganizationalUnit',
            'createPolicy',
            'declineHandshake',
            'deleteOrganization',
            'deleteOrganizationalUnit',
            'deletePolicy',
            'deleteResourcePolicy',
            'deregisterDelegatedAdministrator',
            'describeAccount',
            'describeCreateAccountStatus',
            'describeEffectivePolicy',
            'describeHandshake',
            'describeOrganization',
            'describeOrganizationalUnit',
            'describePolicy',
            'describeResourcePolicy',
            'detachPolicy',
            'disableAWSServiceAccess',
            'disablePolicyType',
            'enableAWSServiceAccess',
            'enableAllFeatures',
            'enablePolicyType',
            'inviteAccountToOrganization',
            'leaveOrganization',
            'listAWSServiceAccessForOrganization',
            'listAccounts',
            'listAccountsForParent',
            'listChildren',
            'listCreateAccountStatus',
            'listDelegatedAdministrators',
            'listDelegatedServicesForAccount',
            'listHandshakesForAccount',
            'listHandshakesForOrganization',
            'listOrganizationalUnitsForParent',
            'listParents',
            'listPolicies',
            'listPoliciesForTarget',
            'listRoots',
            'listTagsForResource',
            'listTargetsForPolicy',
            'moveAccount',
            'putResourcePolicy',
            'registerDelegatedAdministrator',
            'removeAccountFromOrganization',
            'tagResource',
            'untagResource',
            'updateOrganizationalUnit',
            'updatePolicy',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptHandshake' => $this->acceptHandshake(),
            'attachPolicy' => $this->attachPolicy(),
            'cancelHandshake' => $this->cancelHandshake(),
            'closeAccount' => $this->closeAccount(),
            'createAccount' => $this->createAccount(),
            'createGovCloudAccount' => $this->createGovCloudAccount(),
            'createOrganization' => $this->createOrganization(),
            'createOrganizationalUnit' => $this->createOrganizationalUnit(),
            'createPolicy' => $this->createPolicy(),
            'declineHandshake' => $this->declineHandshake(),
            'deleteOrganization' => $this->deleteOrganization(),
            'deleteOrganizationalUnit' => $this->deleteOrganizationalUnit(),
            'deletePolicy' => $this->deletePolicy(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deregisterDelegatedAdministrator' => $this->deregisterDelegatedAdministrator(),
            'describeAccount' => $this->describeAccount(),
            'describeCreateAccountStatus' => $this->describeCreateAccountStatus(),
            'describeEffectivePolicy' => $this->describeEffectivePolicy(),
            'describeHandshake' => $this->describeHandshake(),
            'describeOrganization' => $this->describeOrganization(),
            'describeOrganizationalUnit' => $this->describeOrganizationalUnit(),
            'describePolicy' => $this->describePolicy(),
            'describeResourcePolicy' => $this->describeResourcePolicy(),
            'detachPolicy' => $this->detachPolicy(),
            'disableAWSServiceAccess' => $this->disableAWSServiceAccess(),
            'disablePolicyType' => $this->disablePolicyType(),
            'enableAWSServiceAccess' => $this->enableAWSServiceAccess(),
            'enableAllFeatures' => $this->enableAllFeatures(),
            'enablePolicyType' => $this->enablePolicyType(),
            'inviteAccountToOrganization' => $this->inviteAccountToOrganization(),
            'leaveOrganization' => $this->leaveOrganization(),
            'listAWSServiceAccessForOrganization' => $this->listAWSServiceAccessForOrganization(),
            'listAccounts' => $this->listAccounts(),
            'listAccountsForParent' => $this->listAccountsForParent(),
            'listChildren' => $this->listChildren(),
            'listCreateAccountStatus' => $this->listCreateAccountStatus(),
            'listDelegatedAdministrators' => $this->listDelegatedAdministrators(),
            'listDelegatedServicesForAccount' => $this->listDelegatedServicesForAccount(),
            'listHandshakesForAccount' => $this->listHandshakesForAccount(),
            'listHandshakesForOrganization' => $this->listHandshakesForOrganization(),
            'listOrganizationalUnitsForParent' => $this->listOrganizationalUnitsForParent(),
            'listParents' => $this->listParents(),
            'listPolicies' => $this->listPolicies(),
            'listPoliciesForTarget' => $this->listPoliciesForTarget(),
            'listRoots' => $this->listRoots(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTargetsForPolicy' => $this->listTargetsForPolicy(),
            'moveAccount' => $this->moveAccount(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'registerDelegatedAdministrator' => $this->registerDelegatedAdministrator(),
            'removeAccountFromOrganization' => $this->removeAccountFromOrganization(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateOrganizationalUnit' => $this->updateOrganizationalUnit(),
            'updatePolicy' => $this->updatePolicy(),
        };
    }
    private function acceptHandshake(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshake'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function attachPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function cancelHandshake(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshake'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function closeAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreateAccountStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GovCloudAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONCURRENT_ACCOUNT_MODIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOVCLOUD_ACCOUNT_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createGovCloudAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreateAccountStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GovCloudAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONCURRENT_ACCOUNT_MODIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOVCLOUD_ACCOUNT_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeatureSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterAccountArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterAccountEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailablePolicyTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONSOLIDATED_BILLING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ENABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DISABLE'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createOrganizationalUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
                    new \PHPStan\Type\Constant\ConstantStringType('PolicySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsManaged'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function declineHandshake(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshake'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteOrganizationalUnit(): ?\PHPStan\Type\Type
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
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterDelegatedAdministrator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Account'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Email'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CLOSURE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeCreateAccountStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreateAccountStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GovCloudAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONCURRENT_ACCOUNT_MODIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOVCLOUD_ACCOUNT_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeEffectivePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EffectivePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeHandshake(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshake'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeatureSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterAccountArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterAccountEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailablePolicyTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONSOLIDATED_BILLING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ENABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DISABLE'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeOrganizationalUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsManaged'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function detachPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disableAWSServiceAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disablePolicyType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Root'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ENABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DISABLE'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function enableAWSServiceAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableAllFeatures(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshake'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function enablePolicyType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Root'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ENABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DISABLE'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function inviteAccountToOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshake'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function leaveOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function listAWSServiceAccessForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnabledServicePrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Email'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CLOSURE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccountsForParent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Email'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CLOSURE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listChildren(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Children'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCreateAccountStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreateAccountStatuses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GovCloudAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONCURRENT_ACCOUNT_MODIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOVCLOUD_ACCOUNT_ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_BUSINESS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_PAYMENT_INSTRUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDelegatedAdministrators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DelegatedAdministrators'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Email'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DelegationEnabledDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CLOSURE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDelegatedServicesForAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DelegatedServices'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('DelegationEnabledDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHandshakesForAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshakes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHandshakesForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Handshakes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parties'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVE_ALL_FEATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_FEATURE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARENT_HANDSHAKE'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationalUnitsForParent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listParents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsManaged'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPoliciesForTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsManaged'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Roots'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ENABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DISABLE'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTargetsForPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function moveAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function registerDelegatedAdministrator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeAccountFromOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateOrganizationalUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updatePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsManaged'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CONTROL_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AISERVICES_OPT_OUT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHATBOT_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECLARATIVE_POLICY_EC2'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}