<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CognitoIdentityProviderClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CognitoIdentityProvider\CognitoIdentityProviderClient>
     */
    public function getClass(): string
    {
        return \Aws\CognitoIdentityProvider\CognitoIdentityProviderClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addCustomAttributes',
            'adminAddUserToGroup',
            'adminConfirmSignUp',
            'adminCreateUser',
            'adminDeleteUser',
            'adminDeleteUserAttributes',
            'adminDisableProviderForUser',
            'adminDisableUser',
            'adminEnableUser',
            'adminForgetDevice',
            'adminGetDevice',
            'adminGetUser',
            'adminInitiateAuth',
            'adminLinkProviderForUser',
            'adminListDevices',
            'adminListGroupsForUser',
            'adminListUserAuthEvents',
            'adminRemoveUserFromGroup',
            'adminResetUserPassword',
            'adminRespondToAuthChallenge',
            'adminSetUserMFAPreference',
            'adminSetUserPassword',
            'adminSetUserSettings',
            'adminUpdateAuthEventFeedback',
            'adminUpdateDeviceStatus',
            'adminUpdateUserAttributes',
            'adminUserGlobalSignOut',
            'associateSoftwareToken',
            'changePassword',
            'completeWebAuthnRegistration',
            'confirmDevice',
            'confirmForgotPassword',
            'confirmSignUp',
            'createGroup',
            'createIdentityProvider',
            'createManagedLoginBranding',
            'createResourceServer',
            'createUserImportJob',
            'createUserPool',
            'createUserPoolClient',
            'createUserPoolDomain',
            'deleteGroup',
            'deleteIdentityProvider',
            'deleteManagedLoginBranding',
            'deleteResourceServer',
            'deleteUser',
            'deleteUserAttributes',
            'deleteUserPool',
            'deleteUserPoolClient',
            'deleteUserPoolDomain',
            'deleteWebAuthnCredential',
            'describeIdentityProvider',
            'describeManagedLoginBranding',
            'describeManagedLoginBrandingByClient',
            'describeResourceServer',
            'describeRiskConfiguration',
            'describeUserImportJob',
            'describeUserPool',
            'describeUserPoolClient',
            'describeUserPoolDomain',
            'forgetDevice',
            'forgotPassword',
            'getCSVHeader',
            'getDevice',
            'getGroup',
            'getIdentityProviderByIdentifier',
            'getLogDeliveryConfiguration',
            'getSigningCertificate',
            'getUICustomization',
            'getUser',
            'getUserAttributeVerificationCode',
            'getUserAuthFactors',
            'getUserPoolMfaConfig',
            'globalSignOut',
            'initiateAuth',
            'listDevices',
            'listGroups',
            'listIdentityProviders',
            'listResourceServers',
            'listTagsForResource',
            'listUserImportJobs',
            'listUserPoolClients',
            'listUserPools',
            'listUsers',
            'listUsersInGroup',
            'listWebAuthnCredentials',
            'resendConfirmationCode',
            'respondToAuthChallenge',
            'revokeToken',
            'setLogDeliveryConfiguration',
            'setRiskConfiguration',
            'setUICustomization',
            'setUserMFAPreference',
            'setUserPoolMfaConfig',
            'setUserSettings',
            'signUp',
            'startUserImportJob',
            'startWebAuthnRegistration',
            'stopUserImportJob',
            'tagResource',
            'untagResource',
            'updateAuthEventFeedback',
            'updateDeviceStatus',
            'updateGroup',
            'updateIdentityProvider',
            'updateManagedLoginBranding',
            'updateResourceServer',
            'updateUserAttributes',
            'updateUserPool',
            'updateUserPoolClient',
            'updateUserPoolDomain',
            'verifySoftwareToken',
            'verifyUserAttribute',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addCustomAttributes' => $this->addCustomAttributes(),
            'adminAddUserToGroup' => $this->adminAddUserToGroup(),
            'adminConfirmSignUp' => $this->adminConfirmSignUp(),
            'adminCreateUser' => $this->adminCreateUser(),
            'adminDeleteUser' => $this->adminDeleteUser(),
            'adminDeleteUserAttributes' => $this->adminDeleteUserAttributes(),
            'adminDisableProviderForUser' => $this->adminDisableProviderForUser(),
            'adminDisableUser' => $this->adminDisableUser(),
            'adminEnableUser' => $this->adminEnableUser(),
            'adminForgetDevice' => $this->adminForgetDevice(),
            'adminGetDevice' => $this->adminGetDevice(),
            'adminGetUser' => $this->adminGetUser(),
            'adminInitiateAuth' => $this->adminInitiateAuth(),
            'adminLinkProviderForUser' => $this->adminLinkProviderForUser(),
            'adminListDevices' => $this->adminListDevices(),
            'adminListGroupsForUser' => $this->adminListGroupsForUser(),
            'adminListUserAuthEvents' => $this->adminListUserAuthEvents(),
            'adminRemoveUserFromGroup' => $this->adminRemoveUserFromGroup(),
            'adminResetUserPassword' => $this->adminResetUserPassword(),
            'adminRespondToAuthChallenge' => $this->adminRespondToAuthChallenge(),
            'adminSetUserMFAPreference' => $this->adminSetUserMFAPreference(),
            'adminSetUserPassword' => $this->adminSetUserPassword(),
            'adminSetUserSettings' => $this->adminSetUserSettings(),
            'adminUpdateAuthEventFeedback' => $this->adminUpdateAuthEventFeedback(),
            'adminUpdateDeviceStatus' => $this->adminUpdateDeviceStatus(),
            'adminUpdateUserAttributes' => $this->adminUpdateUserAttributes(),
            'adminUserGlobalSignOut' => $this->adminUserGlobalSignOut(),
            'associateSoftwareToken' => $this->associateSoftwareToken(),
            'changePassword' => $this->changePassword(),
            'completeWebAuthnRegistration' => $this->completeWebAuthnRegistration(),
            'confirmDevice' => $this->confirmDevice(),
            'confirmForgotPassword' => $this->confirmForgotPassword(),
            'confirmSignUp' => $this->confirmSignUp(),
            'createGroup' => $this->createGroup(),
            'createIdentityProvider' => $this->createIdentityProvider(),
            'createManagedLoginBranding' => $this->createManagedLoginBranding(),
            'createResourceServer' => $this->createResourceServer(),
            'createUserImportJob' => $this->createUserImportJob(),
            'createUserPool' => $this->createUserPool(),
            'createUserPoolClient' => $this->createUserPoolClient(),
            'createUserPoolDomain' => $this->createUserPoolDomain(),
            'deleteGroup' => $this->deleteGroup(),
            'deleteIdentityProvider' => $this->deleteIdentityProvider(),
            'deleteManagedLoginBranding' => $this->deleteManagedLoginBranding(),
            'deleteResourceServer' => $this->deleteResourceServer(),
            'deleteUser' => $this->deleteUser(),
            'deleteUserAttributes' => $this->deleteUserAttributes(),
            'deleteUserPool' => $this->deleteUserPool(),
            'deleteUserPoolClient' => $this->deleteUserPoolClient(),
            'deleteUserPoolDomain' => $this->deleteUserPoolDomain(),
            'deleteWebAuthnCredential' => $this->deleteWebAuthnCredential(),
            'describeIdentityProvider' => $this->describeIdentityProvider(),
            'describeManagedLoginBranding' => $this->describeManagedLoginBranding(),
            'describeManagedLoginBrandingByClient' => $this->describeManagedLoginBrandingByClient(),
            'describeResourceServer' => $this->describeResourceServer(),
            'describeRiskConfiguration' => $this->describeRiskConfiguration(),
            'describeUserImportJob' => $this->describeUserImportJob(),
            'describeUserPool' => $this->describeUserPool(),
            'describeUserPoolClient' => $this->describeUserPoolClient(),
            'describeUserPoolDomain' => $this->describeUserPoolDomain(),
            'forgetDevice' => $this->forgetDevice(),
            'forgotPassword' => $this->forgotPassword(),
            'getCSVHeader' => $this->getCSVHeader(),
            'getDevice' => $this->getDevice(),
            'getGroup' => $this->getGroup(),
            'getIdentityProviderByIdentifier' => $this->getIdentityProviderByIdentifier(),
            'getLogDeliveryConfiguration' => $this->getLogDeliveryConfiguration(),
            'getSigningCertificate' => $this->getSigningCertificate(),
            'getUICustomization' => $this->getUICustomization(),
            'getUser' => $this->getUser(),
            'getUserAttributeVerificationCode' => $this->getUserAttributeVerificationCode(),
            'getUserAuthFactors' => $this->getUserAuthFactors(),
            'getUserPoolMfaConfig' => $this->getUserPoolMfaConfig(),
            'globalSignOut' => $this->globalSignOut(),
            'initiateAuth' => $this->initiateAuth(),
            'listDevices' => $this->listDevices(),
            'listGroups' => $this->listGroups(),
            'listIdentityProviders' => $this->listIdentityProviders(),
            'listResourceServers' => $this->listResourceServers(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listUserImportJobs' => $this->listUserImportJobs(),
            'listUserPoolClients' => $this->listUserPoolClients(),
            'listUserPools' => $this->listUserPools(),
            'listUsers' => $this->listUsers(),
            'listUsersInGroup' => $this->listUsersInGroup(),
            'listWebAuthnCredentials' => $this->listWebAuthnCredentials(),
            'resendConfirmationCode' => $this->resendConfirmationCode(),
            'respondToAuthChallenge' => $this->respondToAuthChallenge(),
            'revokeToken' => $this->revokeToken(),
            'setLogDeliveryConfiguration' => $this->setLogDeliveryConfiguration(),
            'setRiskConfiguration' => $this->setRiskConfiguration(),
            'setUICustomization' => $this->setUICustomization(),
            'setUserMFAPreference' => $this->setUserMFAPreference(),
            'setUserPoolMfaConfig' => $this->setUserPoolMfaConfig(),
            'setUserSettings' => $this->setUserSettings(),
            'signUp' => $this->signUp(),
            'startUserImportJob' => $this->startUserImportJob(),
            'startWebAuthnRegistration' => $this->startWebAuthnRegistration(),
            'stopUserImportJob' => $this->stopUserImportJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAuthEventFeedback' => $this->updateAuthEventFeedback(),
            'updateDeviceStatus' => $this->updateDeviceStatus(),
            'updateGroup' => $this->updateGroup(),
            'updateIdentityProvider' => $this->updateIdentityProvider(),
            'updateManagedLoginBranding' => $this->updateManagedLoginBranding(),
            'updateResourceServer' => $this->updateResourceServer(),
            'updateUserAttributes' => $this->updateUserAttributes(),
            'updateUserPool' => $this->updateUserPool(),
            'updateUserPoolClient' => $this->updateUserPoolClient(),
            'updateUserPoolDomain' => $this->updateUserPoolDomain(),
            'verifySoftwareToken' => $this->verifySoftwareToken(),
            'verifyUserAttribute' => $this->verifyUserAttribute(),
        };
    }
    private function addCustomAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminAddUserToGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function adminConfirmSignUp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminCreateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserCreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFAOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNCONFIRMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIRMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPROMISED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_CHANGE_PASSWORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_PROVIDER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function adminDeleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function adminDeleteUserAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminDisableProviderForUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminDisableUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminEnableUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminForgetDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function adminGetDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceCreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastAuthenticatedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function adminGetUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Username'),
                new \PHPStan\Type\Constant\ConstantStringType('UserAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('UserCreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('UserLastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('MFAOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('PreferredMfaSetting'),
                new \PHPStan\Type\Constant\ConstantStringType('UserMFASettingList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UNCONFIRMED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONFIRMED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPROMISED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESET_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FORCE_CHANGE_PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_PROVIDER'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function adminInitiateAuth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationResult'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailableChallenges'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE_TOKEN_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_MFA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFA_SETUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEW_PASSWORD_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_SRP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiresIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewDeviceMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceGroupKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE_TOKEN_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_MFA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFA_SETUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEW_PASSWORD_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_SRP'),
                ]),
            ]),
        ]);
    }
    private function adminLinkProviderForUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminListDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Devices'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceCreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastAuthenticatedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function adminListGroupsForUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Precedence'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function adminListUserAuthEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventRisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChallengeResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventContextData'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventFeedback'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SignIn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignUp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForgotPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('PasswordChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResendCode'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RiskDecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('RiskLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompromisedCredentialsDetected'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NoRisk'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountTakeover'),
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChallengeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChallengeResponse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Password'),
                            new \PHPStan\Type\Constant\ConstantStringType('Mfa'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failure'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FeedbackValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeedbackDate'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Valid'),
                            new \PHPStan\Type\Constant\ConstantStringType('Invalid'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function adminRemoveUserFromGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function adminResetUserPassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminRespondToAuthChallenge(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationResult'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE_TOKEN_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_MFA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFA_SETUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEW_PASSWORD_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_SRP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiresIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewDeviceMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceGroupKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function adminSetUserMFAPreference(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminSetUserPassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminSetUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminUpdateAuthEventFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminUpdateDeviceStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminUpdateUserAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function adminUserGlobalSignOut(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateSoftwareToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecretCode'),
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function changePassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function completeWebAuthnRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function confirmDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserConfirmationNecessary'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function confirmForgotPassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function confirmSignUp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Group'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Precedence'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdpIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createManagedLoginBranding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBranding'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBrandingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCognitoProvidedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColorMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Extension'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMS_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTH_APP_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSKEY_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDP_BUTTON_ICON'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LIGHT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('JPEG'),
                            new \PHPStan\Type\Constant\ConstantStringType('PNG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEBP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createResourceServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceServer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scopes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createUserImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserImportJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createUserPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoVerifiedAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsernameAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsVerificationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationSubject'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerificationMessageTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsAuthenticationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAttributeUpdateSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('MfaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedNumberOfUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsConfigurationFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailConfigurationFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdminCreateUserConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolAddOns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsernameConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountRecoverySetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolTier'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PasswordPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInPolicy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumLength'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireUppercase'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireLowercase'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireNumbers'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireSymbols'),
                            new \PHPStan\Type\Constant\ConstantStringType('PasswordHistorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('TemporaryPasswordValidityDays'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedFirstAuthFactors'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreSignUp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostConfirmation'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefineAuthChallenge'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateAuthChallenge'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerifyAuthChallengeResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreTokenGeneration'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserMigration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreTokenGenerationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomSMSSender'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEmailSender'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyID'),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('V2_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('V3_0'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeDataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeveloperOnlyAttribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mutable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Required'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberAttributeConstraints'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringAttributeConstraints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('Number'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('preferred_username'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SmsMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailSubject'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailMessageByLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailSubjectByLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultEmailOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM_WITH_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM_WITH_CODE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributesRequireVerificationBeforeUpdate'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                            new \PHPStan\Type\Constant\ConstantStringType('email'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChallengeRequiredOnNewDevice'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceOnlyRememberedOnUserPrompt'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplyToEmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailSendingAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSet'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COGNITO_DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnsCallerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowAdminCreateUserOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedAccountValidityDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('InviteMessageTemplate'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMSMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailSubject'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityAdditionalFlows'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENFORCED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CustomAuthMode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENFORCED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CaseSensitive'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryMechanisms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('verified_email'),
                                new \PHPStan\Type\Constant\ConstantStringType('verified_phone_number'),
                                new \PHPStan\Type\Constant\ConstantStringType('admin_only'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ESSENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLUS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createUserPoolClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPoolClient'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenValidityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExplicitAuthFlows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedIdentityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallbackURLs'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogoutURLs'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultRedirectURI'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthFlows'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthScopes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthFlowsUserPoolClient'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalyticsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreventUserExistenceErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableTokenRevocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnablePropagateAdditionalUserContextData'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthSessionValidity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_AUTH_FLOW_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ADMIN_USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_CUSTOM_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_SRP_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_REFRESH_TOKEN_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_AUTH'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('implicit'),
                        new \PHPStan\Type\Constant\ConstantStringType('client_credentials'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserDataShared'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LEGACY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createUserPoolDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDomain'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteManagedLoginBranding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResourceServer(): ?\PHPStan\Type\Type
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
    private function deleteUserAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUserPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUserPoolClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUserPoolDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWebAuthnCredential(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdpIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeManagedLoginBranding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBranding'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBrandingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCognitoProvidedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColorMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Extension'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMS_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTH_APP_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSKEY_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDP_BUTTON_ICON'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LIGHT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('JPEG'),
                            new \PHPStan\Type\Constant\ConstantStringType('PNG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEBP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeManagedLoginBrandingByClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBranding'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBrandingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCognitoProvidedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColorMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Extension'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMS_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTH_APP_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSKEY_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDP_BUTTON_ICON'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LIGHT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('JPEG'),
                            new \PHPStan\Type\Constant\ConstantStringType('PNG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEBP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeResourceServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceServer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scopes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeRiskConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RiskConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompromisedCredentialsRiskConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountTakeoverRiskConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskExceptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SIGN_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_CHANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SIGN_UP'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotifyConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('From'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplyTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('BlockEmail'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoActionEmail'),
                            new \PHPStan\Type\Constant\ConstantStringType('MfaEmail'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('HtmlBody'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('HtmlBody'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('HtmlBody'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LowAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediumAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Notify'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_IF_CONFIGURED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Notify'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_IF_CONFIGURED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Notify'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_IF_CONFIGURED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockedIPRangeList'),
                        new \PHPStan\Type\Constant\ConstantStringType('SkippedIPRangeList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeUserImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserImportJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeUserPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoVerifiedAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsernameAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsVerificationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailVerificationSubject'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerificationMessageTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsAuthenticationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserAttributeUpdateSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('MfaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedNumberOfUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsConfigurationFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailConfigurationFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdminCreateUserConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolAddOns'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsernameConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountRecoverySetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolTier'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PasswordPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInPolicy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumLength'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireUppercase'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireLowercase'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireNumbers'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequireSymbols'),
                            new \PHPStan\Type\Constant\ConstantStringType('PasswordHistorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('TemporaryPasswordValidityDays'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedFirstAuthFactors'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreSignUp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostConfirmation'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefineAuthChallenge'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateAuthChallenge'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerifyAuthChallengeResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreTokenGeneration'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserMigration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreTokenGenerationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomSMSSender'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEmailSender'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyID'),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('V2_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('V3_0'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeDataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeveloperOnlyAttribute'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mutable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Required'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberAttributeConstraints'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringAttributeConstraints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('Number'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                        new \PHPStan\Type\Constant\ConstantStringType('preferred_username'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SmsMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailSubject'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailMessageByLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailSubjectByLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultEmailOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM_WITH_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM_WITH_CODE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributesRequireVerificationBeforeUpdate'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('phone_number'),
                            new \PHPStan\Type\Constant\ConstantStringType('email'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChallengeRequiredOnNewDevice'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceOnlyRememberedOnUserPrompt'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplyToEmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailSendingAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSet'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COGNITO_DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnsCallerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowAdminCreateUserOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedAccountValidityDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('InviteMessageTemplate'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMSMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailSubject'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityAdditionalFlows'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUDIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENFORCED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CustomAuthMode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENFORCED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CaseSensitive'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryMechanisms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('verified_email'),
                                new \PHPStan\Type\Constant\ConstantStringType('verified_phone_number'),
                                new \PHPStan\Type\Constant\ConstantStringType('admin_only'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ESSENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLUS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeUserPoolClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPoolClient'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenValidityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExplicitAuthFlows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedIdentityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallbackURLs'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogoutURLs'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultRedirectURI'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthFlows'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthScopes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthFlowsUserPoolClient'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalyticsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreventUserExistenceErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableTokenRevocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnablePropagateAdditionalUserContextData'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthSessionValidity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_AUTH_FLOW_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ADMIN_USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_CUSTOM_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_SRP_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_REFRESH_TOKEN_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_AUTH'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('implicit'),
                        new \PHPStan\Type\Constant\ConstantStringType('client_credentials'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserDataShared'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LEGACY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeUserPoolDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWSAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDistribution'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function forgetDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function forgotPassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeDeliveryDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCSVHeader(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('CSVHeader'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceCreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastAuthenticatedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Group'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Precedence'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getIdentityProviderByIdentifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdpIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getLogDeliveryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirehoseConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('userNotification'),
                            new \PHPStan\Type\Constant\ConstantStringType('userAuthEvents'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSigningCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUICustomization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UICustomization'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSSVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Username'),
                new \PHPStan\Type\Constant\ConstantStringType('UserAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('MFAOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('PreferredMfaSetting'),
                new \PHPStan\Type\Constant\ConstantStringType('UserMFASettingList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUserAttributeVerificationCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeDeliveryDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getUserAuthFactors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Username'),
                new \PHPStan\Type\Constant\ConstantStringType('PreferredMfaSetting'),
                new \PHPStan\Type\Constant\ConstantStringType('UserMFASettingList'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfiguredUserAuthFactors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                ]),
            ]),
        ]);
    }
    private function getUserPoolMfaConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SmsMfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('SoftwareTokenMfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailMfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('MfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('WebAuthnConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SmsAuthenticationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnsCallerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RelyingPartyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserVerification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function globalSignOut(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function initiateAuth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationResult'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailableChallenges'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE_TOKEN_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_MFA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFA_SETUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEW_PASSWORD_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_SRP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiresIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewDeviceMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceGroupKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE_TOKEN_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_MFA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFA_SETUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEW_PASSWORD_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_SRP'),
                ]),
            ]),
        ]);
    }
    private function listDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Devices'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceCreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceLastAuthenticatedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Precedence'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentityProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Providers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceServers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scopes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listUserImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserImportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUserPoolClients(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPoolClients'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUserPools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPools'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreSignUp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostConfirmation'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefineAuthChallenge'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateAuthChallenge'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerifyAuthChallengeResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreTokenGeneration'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserMigration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreTokenGenerationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomSMSSender'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEmailSender'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyID'),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('V2_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('V3_0'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V1_0'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserCreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFAOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNCONFIRMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIRMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPROMISED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_CHANGE_PASSWORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_PROVIDER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsersInGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserCreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFAOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNCONFIRMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIRMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPROMISED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_CHANGE_PASSWORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_PROVIDER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWebAuthnCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CredentialId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FriendlyCredentialName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelyingPartyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthenticatorAttachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthenticatorTransports'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resendConfirmationCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeDeliveryDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function respondToAuthChallenge(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationResult'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE_TOKEN_MFA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_MFA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MFA_SETUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SELECT_CHALLENGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEVICE_PASSWORD_VERIFIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEW_PASSWORD_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMS_OTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_AUTHN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_SRP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiresIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewDeviceMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceGroupKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function revokeToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setLogDeliveryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirehoseConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('userNotification'),
                            new \PHPStan\Type\Constant\ConstantStringType('userAuthEvents'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function setRiskConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RiskConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompromisedCredentialsRiskConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountTakeoverRiskConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RiskExceptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SIGN_IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_CHANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SIGN_UP'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotifyConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('From'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplyTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('BlockEmail'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoActionEmail'),
                            new \PHPStan\Type\Constant\ConstantStringType('MfaEmail'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('HtmlBody'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('HtmlBody'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('HtmlBody'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LowAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediumAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Notify'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_IF_CONFIGURED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Notify'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_IF_CONFIGURED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Notify'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventAction'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_IF_CONFIGURED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MFA_REQUIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ACTION'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockedIPRangeList'),
                        new \PHPStan\Type\Constant\ConstantStringType('SkippedIPRangeList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function setUICustomization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UICustomization'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSSVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function setUserMFAPreference(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setUserPoolMfaConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SmsMfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('SoftwareTokenMfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailMfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('MfaConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('WebAuthnConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SmsAuthenticationMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SmsConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnsCallerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RelyingPartyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserVerification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function setUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function signUp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserConfirmed'),
                new \PHPStan\Type\Constant\ConstantStringType('CodeDeliveryDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('UserSub'),
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startUserImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserImportJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startWebAuthnRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CredentialCreationOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function stopUserImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserImportJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function updateAuthEventFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDeviceStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Group'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Precedence'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdpIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateManagedLoginBranding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBranding'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginBrandingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCognitoProvidedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColorMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Extension'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAVICON_SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMS_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTH_APP_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSKEY_GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_HEADER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_FOOTER_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_BACKGROUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM_LOGO'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDP_BUTTON_ICON'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LIGHT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ICO'),
                            new \PHPStan\Type\Constant\ConstantStringType('JPEG'),
                            new \PHPStan\Type\Constant\ConstantStringType('PNG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVG'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEBP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateResourceServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceServer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scopes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScopeDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateUserAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeDeliveryDetailsList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryMedium'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateUserPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateUserPoolClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserPoolClient'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdTokenValidity'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenValidityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExplicitAuthFlows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedIdentityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallbackURLs'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogoutURLs'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultRedirectURI'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthFlows'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthScopes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOAuthFlowsUserPoolClient'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnalyticsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreventUserExistenceErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableTokenRevocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnablePropagateAdditionalUserContextData'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthSessionValidity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('RefreshToken'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('hours'),
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN_NO_SRP_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_AUTH_FLOW_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ADMIN_USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_CUSTOM_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_PASSWORD_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_SRP_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_REFRESH_TOKEN_AUTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW_USER_AUTH'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('implicit'),
                        new \PHPStan\Type\Constant\ConstantStringType('client_credentials'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserDataShared'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LEGACY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateUserPoolDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedLoginVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDomain'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifySoftwareToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Session'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyUserAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}