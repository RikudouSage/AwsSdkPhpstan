<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ChimeSDKVoiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ChimeSDKVoice\ChimeSDKVoiceClient>
     */
    public function getClass(): string
    {
        return \Aws\ChimeSDKVoice\ChimeSDKVoiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associatePhoneNumbersWithVoiceConnector',
            'associatePhoneNumbersWithVoiceConnectorGroup',
            'batchDeletePhoneNumber',
            'batchUpdatePhoneNumber',
            'createPhoneNumberOrder',
            'createProxySession',
            'createSipMediaApplication',
            'createSipMediaApplicationCall',
            'createSipRule',
            'createVoiceConnector',
            'createVoiceConnectorGroup',
            'createVoiceProfile',
            'createVoiceProfileDomain',
            'deletePhoneNumber',
            'deleteProxySession',
            'deleteSipMediaApplication',
            'deleteSipRule',
            'deleteVoiceConnector',
            'deleteVoiceConnectorEmergencyCallingConfiguration',
            'deleteVoiceConnectorExternalSystemsConfiguration',
            'deleteVoiceConnectorGroup',
            'deleteVoiceConnectorOrigination',
            'deleteVoiceConnectorProxy',
            'deleteVoiceConnectorStreamingConfiguration',
            'deleteVoiceConnectorTermination',
            'deleteVoiceConnectorTerminationCredentials',
            'deleteVoiceProfile',
            'deleteVoiceProfileDomain',
            'disassociatePhoneNumbersFromVoiceConnector',
            'disassociatePhoneNumbersFromVoiceConnectorGroup',
            'getGlobalSettings',
            'getPhoneNumber',
            'getPhoneNumberOrder',
            'getPhoneNumberSettings',
            'getProxySession',
            'getSipMediaApplication',
            'getSipMediaApplicationAlexaSkillConfiguration',
            'getSipMediaApplicationLoggingConfiguration',
            'getSipRule',
            'getSpeakerSearchTask',
            'getVoiceConnector',
            'getVoiceConnectorEmergencyCallingConfiguration',
            'getVoiceConnectorExternalSystemsConfiguration',
            'getVoiceConnectorGroup',
            'getVoiceConnectorLoggingConfiguration',
            'getVoiceConnectorOrigination',
            'getVoiceConnectorProxy',
            'getVoiceConnectorStreamingConfiguration',
            'getVoiceConnectorTermination',
            'getVoiceConnectorTerminationHealth',
            'getVoiceProfile',
            'getVoiceProfileDomain',
            'getVoiceToneAnalysisTask',
            'listAvailableVoiceConnectorRegions',
            'listPhoneNumberOrders',
            'listPhoneNumbers',
            'listProxySessions',
            'listSipMediaApplications',
            'listSipRules',
            'listSupportedPhoneNumberCountries',
            'listTagsForResource',
            'listVoiceConnectorGroups',
            'listVoiceConnectorTerminationCredentials',
            'listVoiceConnectors',
            'listVoiceProfileDomains',
            'listVoiceProfiles',
            'putSipMediaApplicationAlexaSkillConfiguration',
            'putSipMediaApplicationLoggingConfiguration',
            'putVoiceConnectorEmergencyCallingConfiguration',
            'putVoiceConnectorExternalSystemsConfiguration',
            'putVoiceConnectorLoggingConfiguration',
            'putVoiceConnectorOrigination',
            'putVoiceConnectorProxy',
            'putVoiceConnectorStreamingConfiguration',
            'putVoiceConnectorTermination',
            'putVoiceConnectorTerminationCredentials',
            'restorePhoneNumber',
            'searchAvailablePhoneNumbers',
            'startSpeakerSearchTask',
            'startVoiceToneAnalysisTask',
            'stopSpeakerSearchTask',
            'stopVoiceToneAnalysisTask',
            'tagResource',
            'untagResource',
            'updateGlobalSettings',
            'updatePhoneNumber',
            'updatePhoneNumberSettings',
            'updateProxySession',
            'updateSipMediaApplication',
            'updateSipMediaApplicationCall',
            'updateSipRule',
            'updateVoiceConnector',
            'updateVoiceConnectorGroup',
            'updateVoiceProfile',
            'updateVoiceProfileDomain',
            'validateE911Address',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associatePhoneNumbersWithVoiceConnector' => $this->associatePhoneNumbersWithVoiceConnector(),
            'associatePhoneNumbersWithVoiceConnectorGroup' => $this->associatePhoneNumbersWithVoiceConnectorGroup(),
            'batchDeletePhoneNumber' => $this->batchDeletePhoneNumber(),
            'batchUpdatePhoneNumber' => $this->batchUpdatePhoneNumber(),
            'createPhoneNumberOrder' => $this->createPhoneNumberOrder(),
            'createProxySession' => $this->createProxySession(),
            'createSipMediaApplication' => $this->createSipMediaApplication(),
            'createSipMediaApplicationCall' => $this->createSipMediaApplicationCall(),
            'createSipRule' => $this->createSipRule(),
            'createVoiceConnector' => $this->createVoiceConnector(),
            'createVoiceConnectorGroup' => $this->createVoiceConnectorGroup(),
            'createVoiceProfile' => $this->createVoiceProfile(),
            'createVoiceProfileDomain' => $this->createVoiceProfileDomain(),
            'deletePhoneNumber' => $this->deletePhoneNumber(),
            'deleteProxySession' => $this->deleteProxySession(),
            'deleteSipMediaApplication' => $this->deleteSipMediaApplication(),
            'deleteSipRule' => $this->deleteSipRule(),
            'deleteVoiceConnector' => $this->deleteVoiceConnector(),
            'deleteVoiceConnectorEmergencyCallingConfiguration' => $this->deleteVoiceConnectorEmergencyCallingConfiguration(),
            'deleteVoiceConnectorExternalSystemsConfiguration' => $this->deleteVoiceConnectorExternalSystemsConfiguration(),
            'deleteVoiceConnectorGroup' => $this->deleteVoiceConnectorGroup(),
            'deleteVoiceConnectorOrigination' => $this->deleteVoiceConnectorOrigination(),
            'deleteVoiceConnectorProxy' => $this->deleteVoiceConnectorProxy(),
            'deleteVoiceConnectorStreamingConfiguration' => $this->deleteVoiceConnectorStreamingConfiguration(),
            'deleteVoiceConnectorTermination' => $this->deleteVoiceConnectorTermination(),
            'deleteVoiceConnectorTerminationCredentials' => $this->deleteVoiceConnectorTerminationCredentials(),
            'deleteVoiceProfile' => $this->deleteVoiceProfile(),
            'deleteVoiceProfileDomain' => $this->deleteVoiceProfileDomain(),
            'disassociatePhoneNumbersFromVoiceConnector' => $this->disassociatePhoneNumbersFromVoiceConnector(),
            'disassociatePhoneNumbersFromVoiceConnectorGroup' => $this->disassociatePhoneNumbersFromVoiceConnectorGroup(),
            'getGlobalSettings' => $this->getGlobalSettings(),
            'getPhoneNumber' => $this->getPhoneNumber(),
            'getPhoneNumberOrder' => $this->getPhoneNumberOrder(),
            'getPhoneNumberSettings' => $this->getPhoneNumberSettings(),
            'getProxySession' => $this->getProxySession(),
            'getSipMediaApplication' => $this->getSipMediaApplication(),
            'getSipMediaApplicationAlexaSkillConfiguration' => $this->getSipMediaApplicationAlexaSkillConfiguration(),
            'getSipMediaApplicationLoggingConfiguration' => $this->getSipMediaApplicationLoggingConfiguration(),
            'getSipRule' => $this->getSipRule(),
            'getSpeakerSearchTask' => $this->getSpeakerSearchTask(),
            'getVoiceConnector' => $this->getVoiceConnector(),
            'getVoiceConnectorEmergencyCallingConfiguration' => $this->getVoiceConnectorEmergencyCallingConfiguration(),
            'getVoiceConnectorExternalSystemsConfiguration' => $this->getVoiceConnectorExternalSystemsConfiguration(),
            'getVoiceConnectorGroup' => $this->getVoiceConnectorGroup(),
            'getVoiceConnectorLoggingConfiguration' => $this->getVoiceConnectorLoggingConfiguration(),
            'getVoiceConnectorOrigination' => $this->getVoiceConnectorOrigination(),
            'getVoiceConnectorProxy' => $this->getVoiceConnectorProxy(),
            'getVoiceConnectorStreamingConfiguration' => $this->getVoiceConnectorStreamingConfiguration(),
            'getVoiceConnectorTermination' => $this->getVoiceConnectorTermination(),
            'getVoiceConnectorTerminationHealth' => $this->getVoiceConnectorTerminationHealth(),
            'getVoiceProfile' => $this->getVoiceProfile(),
            'getVoiceProfileDomain' => $this->getVoiceProfileDomain(),
            'getVoiceToneAnalysisTask' => $this->getVoiceToneAnalysisTask(),
            'listAvailableVoiceConnectorRegions' => $this->listAvailableVoiceConnectorRegions(),
            'listPhoneNumberOrders' => $this->listPhoneNumberOrders(),
            'listPhoneNumbers' => $this->listPhoneNumbers(),
            'listProxySessions' => $this->listProxySessions(),
            'listSipMediaApplications' => $this->listSipMediaApplications(),
            'listSipRules' => $this->listSipRules(),
            'listSupportedPhoneNumberCountries' => $this->listSupportedPhoneNumberCountries(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVoiceConnectorGroups' => $this->listVoiceConnectorGroups(),
            'listVoiceConnectorTerminationCredentials' => $this->listVoiceConnectorTerminationCredentials(),
            'listVoiceConnectors' => $this->listVoiceConnectors(),
            'listVoiceProfileDomains' => $this->listVoiceProfileDomains(),
            'listVoiceProfiles' => $this->listVoiceProfiles(),
            'putSipMediaApplicationAlexaSkillConfiguration' => $this->putSipMediaApplicationAlexaSkillConfiguration(),
            'putSipMediaApplicationLoggingConfiguration' => $this->putSipMediaApplicationLoggingConfiguration(),
            'putVoiceConnectorEmergencyCallingConfiguration' => $this->putVoiceConnectorEmergencyCallingConfiguration(),
            'putVoiceConnectorExternalSystemsConfiguration' => $this->putVoiceConnectorExternalSystemsConfiguration(),
            'putVoiceConnectorLoggingConfiguration' => $this->putVoiceConnectorLoggingConfiguration(),
            'putVoiceConnectorOrigination' => $this->putVoiceConnectorOrigination(),
            'putVoiceConnectorProxy' => $this->putVoiceConnectorProxy(),
            'putVoiceConnectorStreamingConfiguration' => $this->putVoiceConnectorStreamingConfiguration(),
            'putVoiceConnectorTermination' => $this->putVoiceConnectorTermination(),
            'putVoiceConnectorTerminationCredentials' => $this->putVoiceConnectorTerminationCredentials(),
            'restorePhoneNumber' => $this->restorePhoneNumber(),
            'searchAvailablePhoneNumbers' => $this->searchAvailablePhoneNumbers(),
            'startSpeakerSearchTask' => $this->startSpeakerSearchTask(),
            'startVoiceToneAnalysisTask' => $this->startVoiceToneAnalysisTask(),
            'stopSpeakerSearchTask' => $this->stopSpeakerSearchTask(),
            'stopVoiceToneAnalysisTask' => $this->stopVoiceToneAnalysisTask(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateGlobalSettings' => $this->updateGlobalSettings(),
            'updatePhoneNumber' => $this->updatePhoneNumber(),
            'updatePhoneNumberSettings' => $this->updatePhoneNumberSettings(),
            'updateProxySession' => $this->updateProxySession(),
            'updateSipMediaApplication' => $this->updateSipMediaApplication(),
            'updateSipMediaApplicationCall' => $this->updateSipMediaApplicationCall(),
            'updateSipRule' => $this->updateSipRule(),
            'updateVoiceConnector' => $this->updateVoiceConnector(),
            'updateVoiceConnectorGroup' => $this->updateVoiceConnectorGroup(),
            'updateVoiceProfile' => $this->updateVoiceProfile(),
            'updateVoiceProfileDomain' => $this->updateVoiceProfileDomain(),
            'validateE911Address' => $this->validateE911Address(),
        };
    }
    private function associatePhoneNumbersWithVoiceConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('Gone'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function associatePhoneNumbersWithVoiceConnectorGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('Gone'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchDeletePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('Gone'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchUpdatePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('Gone'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
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
                    new \PHPStan\Type\Constant\ConstantStringType('OrderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderedPhoneNumbers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exception'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancelRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('New'),
                        new \PHPStan\Type\Constant\ConstantStringType('Porting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Acquired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createProxySession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProxySession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProxySessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Participants'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberSelectionBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchParams'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Open'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Voice'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyPhoneNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreferSticky'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvoidSticky'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createSipMediaApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplication'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSipMediaApplicationCall(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationCall'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSipRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetApplications'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ToPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestUriHostname'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createVoiceConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundHostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_CALL_TRANSFER_CONNECTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_ANALYTICS_CONNECTOR'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createVoiceConnectorGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVoiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createVoiceProfileDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomain'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deletePhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProxySession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSipMediaApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSipRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorEmergencyCallingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorExternalSystemsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorOrigination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorProxy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorStreamingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorTermination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceConnectorTerminationCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVoiceProfileDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociatePhoneNumbersFromVoiceConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('Gone'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function disassociatePhoneNumbersFromVoiceConnectorGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('Gone'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getGlobalSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
            ], [
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
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinCancelRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinInProgress'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                    new \PHPStan\Type\Constant\ConstantStringType('OrderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderedPhoneNumbers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exception'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancelRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('New'),
                        new \PHPStan\Type\Constant\ConstantStringType('Porting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Acquired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                    ])),
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
    private function getProxySession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProxySession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProxySessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Participants'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberSelectionBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchParams'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Open'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Voice'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyPhoneNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreferSticky'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvoidSticky'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSipMediaApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplication'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSipMediaApplicationAlexaSkillConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationAlexaSkillConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaSkillStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaSkillIds'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getSipMediaApplicationLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationLoggingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnableSipMediaApplicationMessageLogs'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getSipRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetApplications'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ToPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestUriHostname'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getSpeakerSearchTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsCaller'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Results'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceprintGenerationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConfidenceScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileId'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundHostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_CALL_TRANSFER_CONNECTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_ANALYTICS_CONNECTOR'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorEmergencyCallingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EmergencyCallingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DNIS'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EmergencyPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('TestPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallingCountry'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorExternalSystemsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExternalSystemsConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SessionBorderControllerTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactCenterSystemTypes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RIBBON_SBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE_ACME_PACKET_SBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAYA_SBCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CISCO_UNIFIED_BORDER_ELEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUDIOCODES_MEDIANT_SBC'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GENESYS_ENGAGE_ON_PREMISES'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAYA_AURA_CALL_CENTER_ELITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAYA_AURA_CONTACT_CENTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnableSIPLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableMediaMetricLogs'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorOrigination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Origination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Routes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Host'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorProxy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Proxy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultSessionExpiryMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('FallBackPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberCountries'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorStreamingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataRetentionInHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingNotificationTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsConfiguration'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationTarget'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorTermination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Termination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CpsLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CidrAllowedList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getVoiceConnectorTerminationHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TerminationHealth'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getVoiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getVoiceProfileDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomain'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getVoiceToneAnalysisTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsCaller'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAvailableVoiceConnectorRegions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorRegions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberOrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrderedPhoneNumbers'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exception'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancelRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('New'),
                        new \PHPStan\Type\Constant\ConstantStringType('Porting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('E164PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Acquired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
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
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinCancelRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinInProgress'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProxySessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProxySessions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProxySessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Participants'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberSelectionBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchParams'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Open'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Voice'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyPhoneNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreferSticky'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvoidSticky'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSipMediaApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSipRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipRules'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetApplications'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ToPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestUriHostname'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedPhoneNumberTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ])),
                ])),
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
    private function listVoiceConnectorGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVoiceConnectorTerminationCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Usernames'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listVoiceConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundHostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_CALL_TRANSFER_CONNECTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_ANALYTICS_CONNECTOR'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVoiceProfileDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomains'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVoiceProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfiles'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putSipMediaApplicationAlexaSkillConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationAlexaSkillConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaSkillStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlexaSkillIds'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function putSipMediaApplicationLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationLoggingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnableSipMediaApplicationMessageLogs'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorEmergencyCallingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EmergencyCallingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DNIS'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EmergencyPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('TestPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallingCountry'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorExternalSystemsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExternalSystemsConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SessionBorderControllerTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactCenterSystemTypes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RIBBON_SBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE_ACME_PACKET_SBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAYA_SBCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CISCO_UNIFIED_BORDER_ELEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUDIOCODES_MEDIANT_SBC'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GENESYS_ENGAGE_ON_PREMISES'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAYA_AURA_CALL_CENTER_ELITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAYA_AURA_CONTACT_CENTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnableSIPLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableMediaMetricLogs'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorOrigination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Origination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Routes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Host'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorProxy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Proxy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultSessionExpiryMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('FallBackPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumberCountries'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorStreamingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataRetentionInHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingNotificationTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsConfiguration'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationTarget'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EventBridge'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorTermination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Termination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CpsLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallingRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CidrAllowedList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function putVoiceConnectorTerminationCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
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
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinCancelRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinInProgress'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSpeakerSearchTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsCaller'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Results'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceprintGenerationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConfidenceScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileId'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startVoiceToneAnalysisTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsCaller'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function stopSpeakerSearchTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopVoiceToneAnalysisTask(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('OrderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                        new \PHPStan\Type\Constant\ConstantStringType('TollFree'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationDialIn'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinCancelRequested'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortinInProgress'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function updateProxySession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProxySession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProxySessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Participants'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberSelectionBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchParams'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Open'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Voice'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyPhoneNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreferSticky'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvoidSticky'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('AreaCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSipMediaApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplication'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSipMediaApplicationCall(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationCall'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSipRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SipRule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SipRuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetApplications'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ToPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestUriHostname'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SipMediaApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateVoiceConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutboundHostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_CALL_TRANSFER_CONNECTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT_ANALYTICS_CONNECTOR'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateVoiceConnectorGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VoiceConnectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateVoiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateVoiceProfileDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomain'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceProfileDomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function validateE911Address(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ValidationResult'),
                new \PHPStan\Type\Constant\ConstantStringType('AddressExternalId'),
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                new \PHPStan\Type\Constant\ConstantStringType('CandidateAddressList'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('streetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('streetSuffix'),
                    new \PHPStan\Type\Constant\ConstantStringType('postDirectional'),
                    new \PHPStan\Type\Constant\ConstantStringType('preDirectional'),
                    new \PHPStan\Type\Constant\ConstantStringType('streetNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('city'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('postalCodePlus4'),
                    new \PHPStan\Type\Constant\ConstantStringType('country'),
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
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('streetInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('streetNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('city'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('postalCodePlus4'),
                    new \PHPStan\Type\Constant\ConstantStringType('country'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
}