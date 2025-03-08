<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ChimeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Chime\ChimeClient>
     */
    public function getClass(): string
    {
        return \Aws\Chime\ChimeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associatePhoneNumberWithUser',
            'associateSigninDelegateGroupsWithAccount',
            'batchCreateRoomMembership',
            'batchDeletePhoneNumber',
            'batchSuspendUser',
            'batchUnsuspendUser',
            'batchUpdatePhoneNumber',
            'batchUpdateUser',
            'createAccount',
            'createBot',
            'createMeetingDialOut',
            'createPhoneNumberOrder',
            'createRoom',
            'createRoomMembership',
            'createUser',
            'deleteAccount',
            'deleteEventsConfiguration',
            'deletePhoneNumber',
            'deleteRoom',
            'deleteRoomMembership',
            'disassociatePhoneNumberFromUser',
            'disassociateSigninDelegateGroupsFromAccount',
            'getAccount',
            'getAccountSettings',
            'getBot',
            'getEventsConfiguration',
            'getGlobalSettings',
            'getPhoneNumber',
            'getPhoneNumberOrder',
            'getPhoneNumberSettings',
            'getRetentionSettings',
            'getRoom',
            'getUser',
            'getUserSettings',
            'inviteUsers',
            'listAccounts',
            'listBots',
            'listPhoneNumberOrders',
            'listPhoneNumbers',
            'listRoomMemberships',
            'listRooms',
            'listSupportedPhoneNumberCountries',
            'listUsers',
            'logoutUser',
            'putEventsConfiguration',
            'putRetentionSettings',
            'redactConversationMessage',
            'redactRoomMessage',
            'regenerateSecurityToken',
            'resetPersonalPIN',
            'restorePhoneNumber',
            'searchAvailablePhoneNumbers',
            'updateAccount',
            'updateAccountSettings',
            'updateBot',
            'updateGlobalSettings',
            'updatePhoneNumber',
            'updatePhoneNumberSettings',
            'updateRoom',
            'updateRoomMembership',
            'updateUser',
            'updateUserSettings',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associatePhoneNumberWithUser' => $this->associatePhoneNumberWithUser(),
            'associateSigninDelegateGroupsWithAccount' => $this->associateSigninDelegateGroupsWithAccount(),
            'batchCreateRoomMembership' => $this->batchCreateRoomMembership(),
            'batchDeletePhoneNumber' => $this->batchDeletePhoneNumber(),
            'batchSuspendUser' => $this->batchSuspendUser(),
            'batchUnsuspendUser' => $this->batchUnsuspendUser(),
            'batchUpdatePhoneNumber' => $this->batchUpdatePhoneNumber(),
            'batchUpdateUser' => $this->batchUpdateUser(),
            'createAccount' => $this->createAccount(),
            'createBot' => $this->createBot(),
            'createMeetingDialOut' => $this->createMeetingDialOut(),
            'createPhoneNumberOrder' => $this->createPhoneNumberOrder(),
            'createRoom' => $this->createRoom(),
            'createRoomMembership' => $this->createRoomMembership(),
            'createUser' => $this->createUser(),
            'deleteAccount' => $this->deleteAccount(),
            'deleteEventsConfiguration' => $this->deleteEventsConfiguration(),
            'deletePhoneNumber' => $this->deletePhoneNumber(),
            'deleteRoom' => $this->deleteRoom(),
            'deleteRoomMembership' => $this->deleteRoomMembership(),
            'disassociatePhoneNumberFromUser' => $this->disassociatePhoneNumberFromUser(),
            'disassociateSigninDelegateGroupsFromAccount' => $this->disassociateSigninDelegateGroupsFromAccount(),
            'getAccount' => $this->getAccount(),
            'getAccountSettings' => $this->getAccountSettings(),
            'getBot' => $this->getBot(),
            'getEventsConfiguration' => $this->getEventsConfiguration(),
            'getGlobalSettings' => $this->getGlobalSettings(),
            'getPhoneNumber' => $this->getPhoneNumber(),
            'getPhoneNumberOrder' => $this->getPhoneNumberOrder(),
            'getPhoneNumberSettings' => $this->getPhoneNumberSettings(),
            'getRetentionSettings' => $this->getRetentionSettings(),
            'getRoom' => $this->getRoom(),
            'getUser' => $this->getUser(),
            'getUserSettings' => $this->getUserSettings(),
            'inviteUsers' => $this->inviteUsers(),
            'listAccounts' => $this->listAccounts(),
            'listBots' => $this->listBots(),
            'listPhoneNumberOrders' => $this->listPhoneNumberOrders(),
            'listPhoneNumbers' => $this->listPhoneNumbers(),
            'listRoomMemberships' => $this->listRoomMemberships(),
            'listRooms' => $this->listRooms(),
            'listSupportedPhoneNumberCountries' => $this->listSupportedPhoneNumberCountries(),
            'listUsers' => $this->listUsers(),
            'logoutUser' => $this->logoutUser(),
            'putEventsConfiguration' => $this->putEventsConfiguration(),
            'putRetentionSettings' => $this->putRetentionSettings(),
            'redactConversationMessage' => $this->redactConversationMessage(),
            'redactRoomMessage' => $this->redactRoomMessage(),
            'regenerateSecurityToken' => $this->regenerateSecurityToken(),
            'resetPersonalPIN' => $this->resetPersonalPIN(),
            'restorePhoneNumber' => $this->restorePhoneNumber(),
            'searchAvailablePhoneNumbers' => $this->searchAvailablePhoneNumbers(),
            'updateAccount' => $this->updateAccount(),
            'updateAccountSettings' => $this->updateAccountSettings(),
            'updateBot' => $this->updateBot(),
            'updateGlobalSettings' => $this->updateGlobalSettings(),
            'updatePhoneNumber' => $this->updatePhoneNumber(),
            'updatePhoneNumberSettings' => $this->updatePhoneNumberSettings(),
            'updateRoom' => $this->updateRoom(),
            'updateRoomMembership' => $this->updateRoomMembership(),
            'updateUser' => $this->updateUser(),
            'updateUserSettings' => $this->updateUserSettings(),
        };
    }
    private function associatePhoneNumberWithUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateSigninDelegateGroupsWithAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchCreateRoomMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MemberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BadRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('Conflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Forbidden'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreconditionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthorized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessable'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupAssociationsExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberAssociationsExist'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDeletePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BadRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('Conflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Forbidden'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreconditionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthorized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessable'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupAssociationsExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberAssociationsExist'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchSuspendUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserErrors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BadRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('Conflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Forbidden'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreconditionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthorized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessable'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupAssociationsExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberAssociationsExist'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchUnsuspendUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserErrors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BadRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('Conflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Forbidden'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreconditionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthorized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessable'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupAssociationsExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberAssociationsExist'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchUpdatePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BadRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('Conflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Forbidden'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreconditionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthorized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessable'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupAssociationsExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberAssociationsExist'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchUpdateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserErrors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BadRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('Conflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Forbidden'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreconditionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthorized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessable'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupAssociationsExist'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberAssociationsExist'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Account'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AwsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultLicense'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedLicenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigninDelegateGroups'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Team'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseLWA'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseOIDC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatBot'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createMeetingDialOut(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPhoneNumberOrder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberOrder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberOrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderedPhoneNumbers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Acquired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createRoom(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Room'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
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
    private function createRoomMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoomMembership'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Member'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemberType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Email'),
                        new \PHPStan\Type\Constant\ConstantStringType('FullName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('User'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bot'),
                            new \PHPStan\Type\Constant\ConstantStringType('Webhook'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Administrator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Member'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryProvisionedNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRegistrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserInvitationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalPIN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('SharedDevice'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unregistered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsAlexaForBusinessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessRoomArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEventsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRoom(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRoomMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociatePhoneNumberFromUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateSigninDelegateGroupsFromAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Account'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AwsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultLicense'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedLicenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigninDelegateGroups'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Team'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseLWA'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseOIDC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DisableRemoteControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDialOut'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatBot'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEventsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventsConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundEventsHTTPSEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getGlobalSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CdrBucket'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CdrBucket'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingNameStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Assigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundMMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundMMS'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateFailed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getPhoneNumberOrder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberOrder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberOrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderedPhoneNumbers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Acquired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getPhoneNumberSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CallingName'),
                new \PHPStan\Type\Constant\ConstantStringType('CallingNameUpdatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getRetentionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RetentionSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiateDeletionTimestamp'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomRetentionSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConversationRetentionSettings'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getRoom(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Room'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
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
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryProvisionedNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRegistrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserInvitationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalPIN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('SharedDevice'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unregistered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsAlexaForBusinessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessRoomArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Telephony'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InboundCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function inviteUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Invites'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InviteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotSent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                ]),
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
                    new \PHPStan\Type\Constant\ConstantStringType('AwsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultLicense'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedLicenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigninDelegateGroups'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Team'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseLWA'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseOIDC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bots'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatBot'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPhoneNumberOrders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberOrders'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberOrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderedPhoneNumbers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Acquired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPhoneNumbers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumbers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingNameStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Assigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundMMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundMMS'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateFailed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoomMemberships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoomMemberships'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Member'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemberType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Email'),
                        new \PHPStan\Type\Constant\ConstantStringType('FullName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('User'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bot'),
                            new \PHPStan\Type\Constant\ConstantStringType('Webhook'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Administrator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Member'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRooms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rooms'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSupportedPhoneNumberCountries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberCountries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedPhoneNumberTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryProvisionedNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRegistrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserInvitationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalPIN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('SharedDevice'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unregistered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsAlexaForBusinessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessRoomArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function logoutUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putEventsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventsConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundEventsHTTPSEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putRetentionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RetentionSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiateDeletionTimestamp'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomRetentionSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConversationRetentionSettings'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function redactConversationMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function redactRoomMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function regenerateSecurityToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatBot'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function resetPersonalPIN(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryProvisionedNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRegistrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserInvitationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalPIN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('SharedDevice'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unregistered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsAlexaForBusinessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessRoomArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function restorePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingNameStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Assigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundMMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundMMS'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateFailed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function searchAvailablePhoneNumbers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumbers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Account'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AwsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultLicense'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedLicenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigninDelegateGroups'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Team'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseLWA'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnterpriseOIDC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('BotEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChatBot'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateGlobalSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingNameStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessCalling'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcquireFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Assigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundCall'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('InboundMMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutboundMMS'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigned'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateFailed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updatePhoneNumberSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRoom(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Room'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
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
    private function updateRoomMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoomMembership'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoomId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Member'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemberType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Email'),
                        new \PHPStan\Type\Constant\ConstantStringType('FullName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('User'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bot'),
                            new \PHPStan\Type\Constant\ConstantStringType('Webhook'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Administrator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Member'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryProvisionedNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRegistrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserInvitationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalPIN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Plus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pro'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProTrial'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('SharedDevice'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unregistered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsAlexaForBusinessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlexaForBusinessRoomArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}