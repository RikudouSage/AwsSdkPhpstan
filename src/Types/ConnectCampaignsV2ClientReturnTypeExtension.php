<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ConnectCampaignsV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ConnectCampaignsV2\ConnectCampaignsV2Client>
     */
    public function getClass(): string
    {
        return \Aws\ConnectCampaignsV2\ConnectCampaignsV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCampaign',
            'deleteCampaign',
            'deleteCampaignChannelSubtypeConfig',
            'deleteCampaignCommunicationLimits',
            'deleteCampaignCommunicationTime',
            'deleteConnectInstanceConfig',
            'deleteConnectInstanceIntegration',
            'deleteInstanceOnboardingJob',
            'describeCampaign',
            'getCampaignState',
            'getCampaignStateBatch',
            'getConnectInstanceConfig',
            'getInstanceOnboardingJobStatus',
            'listCampaigns',
            'listConnectInstanceIntegrations',
            'listTagsForResource',
            'pauseCampaign',
            'putConnectInstanceIntegration',
            'putOutboundRequestBatch',
            'putProfileOutboundRequestBatch',
            'resumeCampaign',
            'startCampaign',
            'startInstanceOnboardingJob',
            'stopCampaign',
            'tagResource',
            'untagResource',
            'updateCampaignChannelSubtypeConfig',
            'updateCampaignCommunicationLimits',
            'updateCampaignCommunicationTime',
            'updateCampaignFlowAssociation',
            'updateCampaignName',
            'updateCampaignSchedule',
            'updateCampaignSource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCampaign' => $this->createCampaign(),
            'deleteCampaign' => $this->deleteCampaign(),
            'deleteCampaignChannelSubtypeConfig' => $this->deleteCampaignChannelSubtypeConfig(),
            'deleteCampaignCommunicationLimits' => $this->deleteCampaignCommunicationLimits(),
            'deleteCampaignCommunicationTime' => $this->deleteCampaignCommunicationTime(),
            'deleteConnectInstanceConfig' => $this->deleteConnectInstanceConfig(),
            'deleteConnectInstanceIntegration' => $this->deleteConnectInstanceIntegration(),
            'deleteInstanceOnboardingJob' => $this->deleteInstanceOnboardingJob(),
            'describeCampaign' => $this->describeCampaign(),
            'getCampaignState' => $this->getCampaignState(),
            'getCampaignStateBatch' => $this->getCampaignStateBatch(),
            'getConnectInstanceConfig' => $this->getConnectInstanceConfig(),
            'getInstanceOnboardingJobStatus' => $this->getInstanceOnboardingJobStatus(),
            'listCampaigns' => $this->listCampaigns(),
            'listConnectInstanceIntegrations' => $this->listConnectInstanceIntegrations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'pauseCampaign' => $this->pauseCampaign(),
            'putConnectInstanceIntegration' => $this->putConnectInstanceIntegration(),
            'putOutboundRequestBatch' => $this->putOutboundRequestBatch(),
            'putProfileOutboundRequestBatch' => $this->putProfileOutboundRequestBatch(),
            'resumeCampaign' => $this->resumeCampaign(),
            'startCampaign' => $this->startCampaign(),
            'startInstanceOnboardingJob' => $this->startInstanceOnboardingJob(),
            'stopCampaign' => $this->stopCampaign(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCampaignChannelSubtypeConfig' => $this->updateCampaignChannelSubtypeConfig(),
            'updateCampaignCommunicationLimits' => $this->updateCampaignCommunicationLimits(),
            'updateCampaignCommunicationTime' => $this->updateCampaignCommunicationTime(),
            'updateCampaignFlowAssociation' => $this->updateCampaignFlowAssociation(),
            'updateCampaignName' => $this->updateCampaignName(),
            'updateCampaignSchedule' => $this->updateCampaignSchedule(),
            'updateCampaignSource' => $this->updateCampaignSource(),
        };
    }
    private function createCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCampaignChannelSubtypeConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCampaignCommunicationLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCampaignCommunicationTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConnectInstanceConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConnectInstanceIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteInstanceOnboardingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('campaign'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtypeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectCampaignFlowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('communicationTimeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('communicationLimitsOverride'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('telephony'),
                        new \PHPStan\Type\Constant\ConstantStringType('sms'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectQueueId'),
                            new \PHPStan\Type\Constant\ConstantStringType('outboundMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultOutboundConfig'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('progressive'),
                                new \PHPStan\Type\Constant\ConstantStringType('predictive'),
                                new \PHPStan\Type\Constant\ConstantStringType('agentless'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('bandwidthAllocation'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('bandwidthAllocation'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectContactFlowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectSourcePhoneNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('answerMachineDetectionConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('enableAnswerMachineDetection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('awaitAnswerMachinePrompt'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('outboundMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultOutboundConfig'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('agentless'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectSourcePhoneNumberArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('wisdomTemplateArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('outboundMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultOutboundConfig'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('agentless'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectSourceEmailAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceEmailAddressDisplayName'),
                                new \PHPStan\Type\Constant\ConstantStringType('wisdomTemplateArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customerProfilesSegmentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTrigger'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerProfilesDomainArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('refreshFrequency'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('localTimeZoneConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('telephony'),
                        new \PHPStan\Type\Constant\ConstantStringType('sms'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultTimeZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('localTimeZoneDetection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP_CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AREA_CODE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('openHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('restrictedPeriods'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dailyHours'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                                ]), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('restrictedPeriodList'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('openHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('restrictedPeriods'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dailyHours'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                                ]), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('restrictedPeriodList'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('openHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('restrictedPeriods'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dailyHours'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                                ]), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('restrictedPeriodList'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allChannelSubtypes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('communicationLimitsList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maxCountPerRecipient'),
                                new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getCampaignState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Initialized'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                ]),
            ]),
        ]);
    }
    private function getCampaignStateBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('failedRequests'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('campaignId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initialized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Running'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('campaignId'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getConnectInstanceConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectInstanceConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceLinkedRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getInstanceOnboardingJobStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectInstanceOnboardingJobStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_BRIDGE_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS_KEY_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listCampaigns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('campaignSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelSubtypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectCampaignFlowArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TELEPHONY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('refreshFrequency'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listConnectInstanceIntegrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('customerProfiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('qConnect'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('objectTypeNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Campaign-Email'),
                            new \PHPStan\Type\Constant\ConstantStringType('Campaign-SMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('Campaign-Telephony'),
                            new \PHPStan\Type\Constant\ConstantStringType('Campaign-Orchestration'),
                        ]), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function pauseCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putConnectInstanceIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putOutboundRequestBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('failedRequests'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                        new \PHPStan\Type\Constant\ConstantStringType('BufferLimitExceeded'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putProfileOutboundRequestBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('failedRequests'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('Conflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function resumeCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startCampaign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startInstanceOnboardingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectInstanceOnboardingJobStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_BRIDGE_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS_KEY_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopCampaign(): ?\PHPStan\Type\Type
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
    private function updateCampaignChannelSubtypeConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCampaignCommunicationLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCampaignCommunicationTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCampaignFlowAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCampaignName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCampaignSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCampaignSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}