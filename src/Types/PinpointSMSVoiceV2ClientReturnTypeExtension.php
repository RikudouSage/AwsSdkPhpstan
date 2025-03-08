<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class PinpointSMSVoiceV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\PinpointSMSVoiceV2\PinpointSMSVoiceV2Client>
     */
    public function getClass(): string
    {
        return \Aws\PinpointSMSVoiceV2\PinpointSMSVoiceV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateOriginationIdentity',
            'associateProtectConfiguration',
            'createConfigurationSet',
            'createEventDestination',
            'createOptOutList',
            'createPool',
            'createProtectConfiguration',
            'createRegistration',
            'createRegistrationAssociation',
            'createRegistrationAttachment',
            'createRegistrationVersion',
            'createVerifiedDestinationNumber',
            'deleteAccountDefaultProtectConfiguration',
            'deleteConfigurationSet',
            'deleteDefaultMessageType',
            'deleteDefaultSenderId',
            'deleteEventDestination',
            'deleteKeyword',
            'deleteMediaMessageSpendLimitOverride',
            'deleteOptOutList',
            'deleteOptedOutNumber',
            'deletePool',
            'deleteProtectConfiguration',
            'deleteProtectConfigurationRuleSetNumberOverride',
            'deleteRegistration',
            'deleteRegistrationAttachment',
            'deleteRegistrationFieldValue',
            'deleteResourcePolicy',
            'deleteTextMessageSpendLimitOverride',
            'deleteVerifiedDestinationNumber',
            'deleteVoiceMessageSpendLimitOverride',
            'describeAccountAttributes',
            'describeAccountLimits',
            'describeConfigurationSets',
            'describeKeywords',
            'describeOptOutLists',
            'describeOptedOutNumbers',
            'describePhoneNumbers',
            'describePools',
            'describeProtectConfigurations',
            'describeRegistrationAttachments',
            'describeRegistrationFieldDefinitions',
            'describeRegistrationFieldValues',
            'describeRegistrationSectionDefinitions',
            'describeRegistrationTypeDefinitions',
            'describeRegistrationVersions',
            'describeRegistrations',
            'describeSenderIds',
            'describeSpendLimits',
            'describeVerifiedDestinationNumbers',
            'disassociateOriginationIdentity',
            'disassociateProtectConfiguration',
            'discardRegistrationVersion',
            'getProtectConfigurationCountryRuleSet',
            'getResourcePolicy',
            'listPoolOriginationIdentities',
            'listProtectConfigurationRuleSetNumberOverrides',
            'listRegistrationAssociations',
            'listTagsForResource',
            'putKeyword',
            'putMessageFeedback',
            'putOptedOutNumber',
            'putProtectConfigurationRuleSetNumberOverride',
            'putRegistrationFieldValue',
            'putResourcePolicy',
            'releasePhoneNumber',
            'releaseSenderId',
            'requestPhoneNumber',
            'requestSenderId',
            'sendDestinationNumberVerificationCode',
            'sendMediaMessage',
            'sendTextMessage',
            'sendVoiceMessage',
            'setAccountDefaultProtectConfiguration',
            'setDefaultMessageFeedbackEnabled',
            'setDefaultMessageType',
            'setDefaultSenderId',
            'setMediaMessageSpendLimitOverride',
            'setTextMessageSpendLimitOverride',
            'setVoiceMessageSpendLimitOverride',
            'submitRegistrationVersion',
            'tagResource',
            'untagResource',
            'updateEventDestination',
            'updatePhoneNumber',
            'updatePool',
            'updateProtectConfiguration',
            'updateProtectConfigurationCountryRuleSet',
            'updateSenderId',
            'verifyDestinationNumber',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateOriginationIdentity' => $this->associateOriginationIdentity(),
            'associateProtectConfiguration' => $this->associateProtectConfiguration(),
            'createConfigurationSet' => $this->createConfigurationSet(),
            'createEventDestination' => $this->createEventDestination(),
            'createOptOutList' => $this->createOptOutList(),
            'createPool' => $this->createPool(),
            'createProtectConfiguration' => $this->createProtectConfiguration(),
            'createRegistration' => $this->createRegistration(),
            'createRegistrationAssociation' => $this->createRegistrationAssociation(),
            'createRegistrationAttachment' => $this->createRegistrationAttachment(),
            'createRegistrationVersion' => $this->createRegistrationVersion(),
            'createVerifiedDestinationNumber' => $this->createVerifiedDestinationNumber(),
            'deleteAccountDefaultProtectConfiguration' => $this->deleteAccountDefaultProtectConfiguration(),
            'deleteConfigurationSet' => $this->deleteConfigurationSet(),
            'deleteDefaultMessageType' => $this->deleteDefaultMessageType(),
            'deleteDefaultSenderId' => $this->deleteDefaultSenderId(),
            'deleteEventDestination' => $this->deleteEventDestination(),
            'deleteKeyword' => $this->deleteKeyword(),
            'deleteMediaMessageSpendLimitOverride' => $this->deleteMediaMessageSpendLimitOverride(),
            'deleteOptOutList' => $this->deleteOptOutList(),
            'deleteOptedOutNumber' => $this->deleteOptedOutNumber(),
            'deletePool' => $this->deletePool(),
            'deleteProtectConfiguration' => $this->deleteProtectConfiguration(),
            'deleteProtectConfigurationRuleSetNumberOverride' => $this->deleteProtectConfigurationRuleSetNumberOverride(),
            'deleteRegistration' => $this->deleteRegistration(),
            'deleteRegistrationAttachment' => $this->deleteRegistrationAttachment(),
            'deleteRegistrationFieldValue' => $this->deleteRegistrationFieldValue(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteTextMessageSpendLimitOverride' => $this->deleteTextMessageSpendLimitOverride(),
            'deleteVerifiedDestinationNumber' => $this->deleteVerifiedDestinationNumber(),
            'deleteVoiceMessageSpendLimitOverride' => $this->deleteVoiceMessageSpendLimitOverride(),
            'describeAccountAttributes' => $this->describeAccountAttributes(),
            'describeAccountLimits' => $this->describeAccountLimits(),
            'describeConfigurationSets' => $this->describeConfigurationSets(),
            'describeKeywords' => $this->describeKeywords(),
            'describeOptOutLists' => $this->describeOptOutLists(),
            'describeOptedOutNumbers' => $this->describeOptedOutNumbers(),
            'describePhoneNumbers' => $this->describePhoneNumbers(),
            'describePools' => $this->describePools(),
            'describeProtectConfigurations' => $this->describeProtectConfigurations(),
            'describeRegistrationAttachments' => $this->describeRegistrationAttachments(),
            'describeRegistrationFieldDefinitions' => $this->describeRegistrationFieldDefinitions(),
            'describeRegistrationFieldValues' => $this->describeRegistrationFieldValues(),
            'describeRegistrationSectionDefinitions' => $this->describeRegistrationSectionDefinitions(),
            'describeRegistrationTypeDefinitions' => $this->describeRegistrationTypeDefinitions(),
            'describeRegistrationVersions' => $this->describeRegistrationVersions(),
            'describeRegistrations' => $this->describeRegistrations(),
            'describeSenderIds' => $this->describeSenderIds(),
            'describeSpendLimits' => $this->describeSpendLimits(),
            'describeVerifiedDestinationNumbers' => $this->describeVerifiedDestinationNumbers(),
            'disassociateOriginationIdentity' => $this->disassociateOriginationIdentity(),
            'disassociateProtectConfiguration' => $this->disassociateProtectConfiguration(),
            'discardRegistrationVersion' => $this->discardRegistrationVersion(),
            'getProtectConfigurationCountryRuleSet' => $this->getProtectConfigurationCountryRuleSet(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'listPoolOriginationIdentities' => $this->listPoolOriginationIdentities(),
            'listProtectConfigurationRuleSetNumberOverrides' => $this->listProtectConfigurationRuleSetNumberOverrides(),
            'listRegistrationAssociations' => $this->listRegistrationAssociations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putKeyword' => $this->putKeyword(),
            'putMessageFeedback' => $this->putMessageFeedback(),
            'putOptedOutNumber' => $this->putOptedOutNumber(),
            'putProtectConfigurationRuleSetNumberOverride' => $this->putProtectConfigurationRuleSetNumberOverride(),
            'putRegistrationFieldValue' => $this->putRegistrationFieldValue(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'releasePhoneNumber' => $this->releasePhoneNumber(),
            'releaseSenderId' => $this->releaseSenderId(),
            'requestPhoneNumber' => $this->requestPhoneNumber(),
            'requestSenderId' => $this->requestSenderId(),
            'sendDestinationNumberVerificationCode' => $this->sendDestinationNumberVerificationCode(),
            'sendMediaMessage' => $this->sendMediaMessage(),
            'sendTextMessage' => $this->sendTextMessage(),
            'sendVoiceMessage' => $this->sendVoiceMessage(),
            'setAccountDefaultProtectConfiguration' => $this->setAccountDefaultProtectConfiguration(),
            'setDefaultMessageFeedbackEnabled' => $this->setDefaultMessageFeedbackEnabled(),
            'setDefaultMessageType' => $this->setDefaultMessageType(),
            'setDefaultSenderId' => $this->setDefaultSenderId(),
            'setMediaMessageSpendLimitOverride' => $this->setMediaMessageSpendLimitOverride(),
            'setTextMessageSpendLimitOverride' => $this->setTextMessageSpendLimitOverride(),
            'setVoiceMessageSpendLimitOverride' => $this->setVoiceMessageSpendLimitOverride(),
            'submitRegistrationVersion' => $this->submitRegistrationVersion(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateEventDestination' => $this->updateEventDestination(),
            'updatePhoneNumber' => $this->updatePhoneNumber(),
            'updatePool' => $this->updatePool(),
            'updateProtectConfiguration' => $this->updateProtectConfiguration(),
            'updateProtectConfigurationCountryRuleSet' => $this->updateProtectConfigurationCountryRuleSet(),
            'updateSenderId' => $this->updateSenderId(),
            'verifyDestinationNumber' => $this->verifyDestinationNumber(),
        };
    }
    private function associateOriginationIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateProtectConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfigurationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createEventDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDestination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventDestinationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PROTECT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_RINGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_NO_ANSWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_INACCESSIBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_TYPE_UNSUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_SIZE_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createOptOutList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('SharedRoutesEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createProtectConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountDefault'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_AUTHENTICATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_UPDATES'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createRegistrationAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRegistrationAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('AttachmentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createRegistrationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatusHistory'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_AUTHENTICATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISCARDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DraftTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiresAuthenticationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscardedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeniedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevokedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivedTimestamp'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createVerifiedDestinationNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationPhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERIFIED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteAccountDefaultProtectConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DefaultProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultProtectConfigurationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteConfigurationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDestinations'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultMessageType'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultSenderId'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultMessageFeedbackEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventDestinationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PROTECT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_RINGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_NO_ANSWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_INACCESSIBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_TYPE_UNSUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_SIZE_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteDefaultMessageType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
            ]),
        ]);
    }
    private function deleteDefaultSenderId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteEventDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDestination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventDestinationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PROTECT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_RINGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_NO_ANSWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_INACCESSIBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_TYPE_UNSUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_SIZE_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteKeyword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('Keyword'),
                new \PHPStan\Type\Constant\ConstantStringType('KeywordMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('KeywordAction'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC_RESPONSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                ]),
            ]),
        ]);
    }
    private function deleteMediaMessageSpendLimitOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLimit'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteOptOutList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteOptedOutNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('OptedOutNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('OptedOutTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('EndUserOptedOut'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function deletePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('SharedRoutesEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteProtectConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountDefault'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function deleteProtectConfigurationRuleSetNumberOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationPhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovedVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDeniedVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_AUTHENTICATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_UPDATES'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteRegistrationAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('AttachmentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('AttachmentUploadErrorReason'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteRegistrationFieldValue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('FieldPath'),
                new \PHPStan\Type\Constant\ConstantStringType('SelectChoices'),
                new \PHPStan\Type\Constant\ConstantStringType('TextValue'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteTextMessageSpendLimitOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLimit'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteVerifiedDestinationNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationPhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteVoiceMessageSpendLimitOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLimit'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeAccountAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_PROTECT_CONFIGURATION_ID'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAccountLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLimits'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Used'),
                    new \PHPStan\Type\Constant\ConstantStringType('Max'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBERS'),
                        new \PHPStan\Type\Constant\ConstantStringType('POOLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_SETS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT_LISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SENDER_IDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_ATTACHMENTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFIED_DESTINATION_NUMBERS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConfigurationSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultMessageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultSenderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultMessageFeedbackEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventDestinationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnsDestination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_SENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_SUCCESSFUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_DELIVERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID_MESSAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNREACHABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_UNREACHABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_BLOCKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_BLOCKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_SPAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_TTL_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT_PROTECT_BLOCKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_INITIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_RINGING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_ANSWERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_NO_ANSWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOICE_TTL_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SUCCESSFUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_DELIVERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID_MESSAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNREACHABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_UNREACHABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_BLOCKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_BLOCKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SPAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_TTL_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_INACCESSIBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_TYPE_UNSUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_SIZE_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeKeywords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Keyword'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeywordMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeywordAction'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC_RESPONSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeOptOutLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OptOutLists'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OptOutListArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeOptedOutNumbers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('OptedOutNumbers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OptedOutNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptedOutTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndUserOptedOut'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePhoneNumbers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumbers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberCapabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MMS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_CODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LONG_CODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEN_DLC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIMULATOR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Pools'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedRoutesEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeProtectConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistrationAttachments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentUploadErrorReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistrationFieldDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationFieldDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SectionPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldRequirement'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectValidation'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextValidation'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayHints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONDITIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxChoices'),
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelectOptionDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextValidationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExampleTextValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Option'),
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistrationFieldValues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationFieldValues'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FieldPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectChoices'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeniedReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistrationSectionDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationSectionDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SectionPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayHints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationLink'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistrationTypeDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationTypeDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayHints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociationBehavior'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_BEFORE_SUBMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_ON_APPROVAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_AFTER_COMPLETE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_CLOSES_REGISTRATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_ALLOWS_DELETE_REGISTRATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_REGISTRATION_DISASSOCIATES'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationLink'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistrationVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatusHistory'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeniedReasons'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVIEWING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_AUTHENTICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCARDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DraftTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmittedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewingTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequiresAuthenticationTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApprovedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('DiscardedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeniedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevokedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArchivedTimestamp'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('LongDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentationLink'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Registrations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovedVersionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestDeniedVersionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVIEWING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_AUTHENTICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_UPDATES'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSenderIds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SenderIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SenderIdArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSpendLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SpendLimits'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnforcedLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_MESSAGE_MONTHLY_SPEND_LIMIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_MESSAGE_MONTHLY_SPEND_LIMIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_MESSAGE_MONTHLY_SPEND_LIMIT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeVerifiedDestinationNumbers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumbers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFIED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateOriginationIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateProtectConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function discardRegistrationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatusHistory'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_AUTHENTICATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISCARDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DraftTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiresAuthenticationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscardedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeniedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevokedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivedTimestamp'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getProtectConfigurationCountryRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberCapability'),
                new \PHPStan\Type\Constant\ConstantStringType('CountryRuleSet'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MMS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listPoolOriginationIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentity'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberCapabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MMS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProtectConfigurationRuleSetNumberOverrides(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleSetNumberOverrides'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRegistrationAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putKeyword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginationIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('Keyword'),
                new \PHPStan\Type\Constant\ConstantStringType('KeywordMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('KeywordAction'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC_RESPONSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPT_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPT_IN'),
                ]),
            ]),
        ]);
    }
    private function putMessageFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageFeedbackStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RECEIVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function putOptedOutNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('OptedOutNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('OptedOutTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('EndUserOptedOut'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function putProtectConfigurationRuleSetNumberOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationPhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function putRegistrationFieldValue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('FieldPath'),
                new \PHPStan\Type\Constant\ConstantStringType('SelectChoices'),
                new \PHPStan\Type\Constant\ConstantStringType('TextValue'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationAttachmentId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function releasePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberCapabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberType'),
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MMS'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SHORT_CODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LONG_CODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEN_DLC'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIMULATOR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function releaseSenderId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SenderIdArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function requestPhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberCapabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberType'),
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MMS'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LONG_CODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEN_DLC'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIMULATOR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function requestSenderId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SenderIdArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function sendDestinationNumberVerificationCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendMediaMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendTextMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendVoiceMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setAccountDefaultProtectConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DefaultProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultProtectConfigurationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setDefaultMessageFeedbackEnabled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageFeedbackEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function setDefaultMessageType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
            ]),
        ]);
    }
    private function setDefaultSenderId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setMediaMessageSpendLimitOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLimit'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function setTextMessageSpendLimitOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLimit'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function setVoiceMessageSpendLimitOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLimit'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function submitRegistrationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationVersionStatusHistory'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVIEWING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_AUTHENTICATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISCARDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DraftTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiresAuthenticationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscardedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeniedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevokedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivedTimestamp'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateEventDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDestination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventDestinationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingEventTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT_PROTECT_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_RINGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_ANSWERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_NO_ANSWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_INVALID_MESSAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_UNREACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_CARRIER_BLOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_SPAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_TTL_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_INACCESSIBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_TYPE_UNSUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_FILE_SIZE_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updatePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberCapabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberType'),
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MMS'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SHORT_CODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LONG_CODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TOLL_FREE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEN_DLC'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIMULATOR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updatePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TwoWayChannelRole'),
                new \PHPStan\Type\Constant\ConstantStringType('SelfManagedOptOutsEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OptOutListName'),
                new \PHPStan\Type\Constant\ConstantStringType('SharedRoutesEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateProtectConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountDefault'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateProtectConfigurationCountryRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtectConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberCapability'),
                new \PHPStan\Type\Constant\ConstantStringType('CountryRuleSet'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MMS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateSenderId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SenderIdArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsoCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('MonthlyLeasingPrice'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROMOTIONAL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyDestinationNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedDestinationNumberId'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationPhoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERIFIED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}