<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ConnectCampaignServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ConnectCampaignService\ConnectCampaignServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\ConnectCampaignService\ConnectCampaignServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCampaign',
            'deleteCampaign',
            'deleteConnectInstanceConfig',
            'deleteInstanceOnboardingJob',
            'describeCampaign',
            'getCampaignState',
            'getCampaignStateBatch',
            'getConnectInstanceConfig',
            'getInstanceOnboardingJobStatus',
            'listCampaigns',
            'listTagsForResource',
            'pauseCampaign',
            'putDialRequestBatch',
            'resumeCampaign',
            'startCampaign',
            'startInstanceOnboardingJob',
            'stopCampaign',
            'tagResource',
            'untagResource',
            'updateCampaignDialerConfig',
            'updateCampaignName',
            'updateCampaignOutboundCallConfig',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCampaign' => $this->createCampaign(),
            'deleteCampaign' => $this->deleteCampaign(),
            'deleteConnectInstanceConfig' => $this->deleteConnectInstanceConfig(),
            'deleteInstanceOnboardingJob' => $this->deleteInstanceOnboardingJob(),
            'describeCampaign' => $this->describeCampaign(),
            'getCampaignState' => $this->getCampaignState(),
            'getCampaignStateBatch' => $this->getCampaignStateBatch(),
            'getConnectInstanceConfig' => $this->getConnectInstanceConfig(),
            'getInstanceOnboardingJobStatus' => $this->getInstanceOnboardingJobStatus(),
            'listCampaigns' => $this->listCampaigns(),
            'listTagsForResource' => $this->listTagsForResource(),
            'pauseCampaign' => $this->pauseCampaign(),
            'putDialRequestBatch' => $this->putDialRequestBatch(),
            'resumeCampaign' => $this->resumeCampaign(),
            'startCampaign' => $this->startCampaign(),
            'startInstanceOnboardingJob' => $this->startInstanceOnboardingJob(),
            'stopCampaign' => $this->stopCampaign(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCampaignDialerConfig' => $this->updateCampaignDialerConfig(),
            'updateCampaignName' => $this->updateCampaignName(),
            'updateCampaignOutboundCallConfig' => $this->updateCampaignOutboundCallConfig(),
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
    private function deleteConnectInstanceConfig(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('dialerConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('outboundCallConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('progressiveDialerConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('predictiveDialerConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentlessDialerConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bandwidthAllocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('dialingCapacity'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bandwidthAllocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('dialingCapacity'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dialingCapacity'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('connectContactFlowId'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectSourcePhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectQueueId'),
                        new \PHPStan\Type\Constant\ConstantStringType('answerMachineDetectionConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
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
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
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
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectInstanceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
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
    private function putDialRequestBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('failedRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
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
                        ]),
                    ]),
                ])),
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
    private function updateCampaignDialerConfig(): ?\PHPStan\Type\Type
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
    private function updateCampaignOutboundCallConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}