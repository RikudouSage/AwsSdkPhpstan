<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodePipelineClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodePipeline\CodePipelineClient>
     */
    public function getClass(): string
    {
        return \Aws\CodePipeline\CodePipelineClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acknowledgeJob',
            'acknowledgeThirdPartyJob',
            'createCustomActionType',
            'createPipeline',
            'deleteCustomActionType',
            'deletePipeline',
            'deleteWebhook',
            'deregisterWebhookWithThirdParty',
            'disableStageTransition',
            'enableStageTransition',
            'getActionType',
            'getJobDetails',
            'getPipeline',
            'getPipelineExecution',
            'getPipelineState',
            'getThirdPartyJobDetails',
            'listActionExecutions',
            'listActionTypes',
            'listPipelineExecutions',
            'listPipelines',
            'listRuleExecutions',
            'listRuleTypes',
            'listTagsForResource',
            'listWebhooks',
            'overrideStageCondition',
            'pollForJobs',
            'pollForThirdPartyJobs',
            'putActionRevision',
            'putApprovalResult',
            'putJobFailureResult',
            'putJobSuccessResult',
            'putThirdPartyJobFailureResult',
            'putThirdPartyJobSuccessResult',
            'putWebhook',
            'registerWebhookWithThirdParty',
            'retryStageExecution',
            'rollbackStage',
            'startPipelineExecution',
            'stopPipelineExecution',
            'tagResource',
            'untagResource',
            'updateActionType',
            'updatePipeline',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acknowledgeJob' => $this->acknowledgeJob(),
            'acknowledgeThirdPartyJob' => $this->acknowledgeThirdPartyJob(),
            'createCustomActionType' => $this->createCustomActionType(),
            'createPipeline' => $this->createPipeline(),
            'deleteCustomActionType' => $this->deleteCustomActionType(),
            'deletePipeline' => $this->deletePipeline(),
            'deleteWebhook' => $this->deleteWebhook(),
            'deregisterWebhookWithThirdParty' => $this->deregisterWebhookWithThirdParty(),
            'disableStageTransition' => $this->disableStageTransition(),
            'enableStageTransition' => $this->enableStageTransition(),
            'getActionType' => $this->getActionType(),
            'getJobDetails' => $this->getJobDetails(),
            'getPipeline' => $this->getPipeline(),
            'getPipelineExecution' => $this->getPipelineExecution(),
            'getPipelineState' => $this->getPipelineState(),
            'getThirdPartyJobDetails' => $this->getThirdPartyJobDetails(),
            'listActionExecutions' => $this->listActionExecutions(),
            'listActionTypes' => $this->listActionTypes(),
            'listPipelineExecutions' => $this->listPipelineExecutions(),
            'listPipelines' => $this->listPipelines(),
            'listRuleExecutions' => $this->listRuleExecutions(),
            'listRuleTypes' => $this->listRuleTypes(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWebhooks' => $this->listWebhooks(),
            'overrideStageCondition' => $this->overrideStageCondition(),
            'pollForJobs' => $this->pollForJobs(),
            'pollForThirdPartyJobs' => $this->pollForThirdPartyJobs(),
            'putActionRevision' => $this->putActionRevision(),
            'putApprovalResult' => $this->putApprovalResult(),
            'putJobFailureResult' => $this->putJobFailureResult(),
            'putJobSuccessResult' => $this->putJobSuccessResult(),
            'putThirdPartyJobFailureResult' => $this->putThirdPartyJobFailureResult(),
            'putThirdPartyJobSuccessResult' => $this->putThirdPartyJobSuccessResult(),
            'putWebhook' => $this->putWebhook(),
            'registerWebhookWithThirdParty' => $this->registerWebhookWithThirdParty(),
            'retryStageExecution' => $this->retryStageExecution(),
            'rollbackStage' => $this->rollbackStage(),
            'startPipelineExecution' => $this->startPipelineExecution(),
            'stopPipelineExecution' => $this->stopPipelineExecution(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateActionType' => $this->updateActionType(),
            'updatePipeline' => $this->updatePipeline(),
        };
    }
    private function acknowledgeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                    new \PHPStan\Type\Constant\ConstantStringType('Dispatched'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
            ]),
        ]);
    }
    private function acknowledgeThirdPartyJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                    new \PHPStan\Type\Constant\ConstantStringType('Dispatched'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
            ]),
        ]);
    }
    private function createCustomActionType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionConfigurationProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputArtifactDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputArtifactDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('Build'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                            new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                            new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                            new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thirdPartyConfigurationUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityUrlTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionUrlTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionUrlTemplate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('secret'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryable'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('minimumCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('minimumCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactStore'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactStores'),
                    new \PHPStan\Type\Constant\ConstantStringType('stages'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineType'),
                    new \PHPStan\Type\Constant\ConstantStringType('variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('triggers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('blockers'),
                            new \PHPStan\Type\Constant\ConstantStringType('actions'),
                            new \PHPStan\Type\Constant\ConstantStringType('onFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('onSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('beforeEntry'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runOrder'),
                                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                    new \PHPStan\Type\Constant\ConstantStringType('outputArtifacts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('outputVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('files'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('result'),
                                new \PHPStan\Type\Constant\ConstantStringType('retryConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('retryMode'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ACTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL_ACTIONS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('V2'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('providerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CodeStarSourceConnection'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceActionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('push'),
                                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                        new \PHPStan\Type\Constant\ConstantStringType('branches'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filePaths'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                                        new \PHPStan\Type\Constant\ConstantStringType('branches'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filePaths'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteCustomActionType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterWebhookWithThirdParty(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableStageTransition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableStageTransition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getActionType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('executor'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputArtifactDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputArtifactDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    new \PHPStan\Type\Constant\ConstantStringType('urls'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyStatementsTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobTimeout'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaExecutorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobWorkerExecutorConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('pollingAccounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('pollingServicePrincipals'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JobWorker'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('Build'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                            new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                            new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('minimumCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('minimumCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowedAccounts'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('optional'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('noEcho'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryable'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configurationUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityUrlTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionUrlTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionUrlTemplate'),
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
    private function getJobDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineContext'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('continuationToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('category'),
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('provider'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineName'),
                            new \PHPStan\Type\Constant\ConstantStringType('stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionExecutionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('objectKey'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('objectKey'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactStore'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactStores'),
                    new \PHPStan\Type\Constant\ConstantStringType('stages'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineType'),
                    new \PHPStan\Type\Constant\ConstantStringType('variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('triggers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('blockers'),
                            new \PHPStan\Type\Constant\ConstantStringType('actions'),
                            new \PHPStan\Type\Constant\ConstantStringType('onFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('onSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('beforeEntry'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runOrder'),
                                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                    new \PHPStan\Type\Constant\ConstantStringType('outputArtifacts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('outputVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('files'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('result'),
                                new \PHPStan\Type\Constant\ConstantStringType('retryConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('retryMode'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ACTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL_ACTIONS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('V2'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('providerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CodeStarSourceConnection'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceActionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('push'),
                                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                        new \PHPStan\Type\Constant\ConstantStringType('branches'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filePaths'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                                        new \PHPStan\Type\Constant\ConstantStringType('branches'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filePaths'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('updated'),
                    new \PHPStan\Type\Constant\ConstantStringType('pollingDisabledAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getPipelineExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecution'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactRevisions'),
                    new \PHPStan\Type\Constant\ConstantStringType('variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('trigger'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('rollbackMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Superseded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('revisionChangeIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('revisionSummary'),
                            new \PHPStan\Type\Constant\ConstantStringType('created'),
                            new \PHPStan\Type\Constant\ConstantStringType('revisionUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('resolvedValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('triggerType'),
                        new \PHPStan\Type\Constant\ConstantStringType('triggerDetail'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreatePipeline'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartPipelineExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('PollForSourceChanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('Webhook'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEvent'),
                            new \PHPStan\Type\Constant\ConstantStringType('PutActionRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('WebhookV2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManualRollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutomatedRollback'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rollbackTargetPipelineExecutionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPipelineState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelineName'),
                new \PHPStan\Type\Constant\ConstantStringType('pipelineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('stageStates'),
                new \PHPStan\Type\Constant\ConstantStringType('created'),
                new \PHPStan\Type\Constant\ConstantStringType('updated'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('inboundExecution'),
                        new \PHPStan\Type\Constant\ConstantStringType('inboundExecutions'),
                        new \PHPStan\Type\Constant\ConstantStringType('inboundTransitionState'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionStates'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                        new \PHPStan\Type\Constant\ConstantStringType('beforeEntryConditionState'),
                        new \PHPStan\Type\Constant\ConstantStringType('onSuccessConditionState'),
                        new \PHPStan\Type\Constant\ConstantStringType('onFailureConditionState'),
                        new \PHPStan\Type\Constant\ConstantStringType('retryStageMetadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastChangedBy'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastChangedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabledReason'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('currentRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('revisionUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('revisionChangeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionExecutionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                                    new \PHPStan\Type\Constant\ConstantStringType('token'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('externalExecutionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('externalExecutionUrl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('percentComplete'),
                                    new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logStreamARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('conditionStates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('summary'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ruleStates'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('summary'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('currentRevision'),
                                            new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                                            new \PHPStan\Type\Constant\ConstantStringType('entityUrl'),
                                            new \PHPStan\Type\Constant\ConstantStringType('revisionUrl'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('revisionChangeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('created'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleExecutionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                                new \PHPStan\Type\Constant\ConstantStringType('summary'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                                                new \PHPStan\Type\Constant\ConstantStringType('token'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionUrl'),
                                                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('conditionStates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('summary'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ruleStates'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('summary'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('currentRevision'),
                                            new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                                            new \PHPStan\Type\Constant\ConstantStringType('entityUrl'),
                                            new \PHPStan\Type\Constant\ConstantStringType('revisionUrl'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('revisionChangeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('created'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleExecutionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                                new \PHPStan\Type\Constant\ConstantStringType('summary'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                                                new \PHPStan\Type\Constant\ConstantStringType('token'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionUrl'),
                                                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('conditionStates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('summary'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ruleStates'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('summary'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Errored'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('currentRevision'),
                                            new \PHPStan\Type\Constant\ConstantStringType('latestExecution'),
                                            new \PHPStan\Type\Constant\ConstantStringType('entityUrl'),
                                            new \PHPStan\Type\Constant\ConstantStringType('revisionUrl'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('revisionChangeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('created'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleExecutionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                                new \PHPStan\Type\Constant\ConstantStringType('summary'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                                                new \PHPStan\Type\Constant\ConstantStringType('token'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionUrl'),
                                                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('autoStageRetryAttempt'),
                            new \PHPStan\Type\Constant\ConstantStringType('manualStageRetryAttempt'),
                            new \PHPStan\Type\Constant\ConstantStringType('latestRetryTrigger'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutomatedStageRetry'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManualStageRetry'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getThirdPartyJobDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                    new \PHPStan\Type\Constant\ConstantStringType('nonce'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionTypeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineContext'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('continuationToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('category'),
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('provider'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineName'),
                            new \PHPStan\Type\Constant\ConstantStringType('stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionExecutionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('objectKey'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('objectKey'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listActionExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionExecutionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('resolvedConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('category'),
                                new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3location'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('outputArtifacts'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionResult'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputVariables'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3location'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('logStreamARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listActionTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('settings'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionConfigurationProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputArtifactDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputArtifactDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('category'),
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('provider'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('thirdPartyConfigurationUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityUrlTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionUrlTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('revisionUrlTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('required'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('secret'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryable'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('String'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('minimumCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximumCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('minimumCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximumCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPipelineExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceRevisions'),
                        new \PHPStan\Type\Constant\ConstantStringType('trigger'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopTrigger'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rollbackMetadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Superseded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('revisionSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('revisionUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('triggerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('triggerDetail'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreatePipeline'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartPipelineExecution'),
                                new \PHPStan\Type\Constant\ConstantStringType('PollForSourceChanges'),
                                new \PHPStan\Type\Constant\ConstantStringType('Webhook'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEvent'),
                                new \PHPStan\Type\Constant\ConstantStringType('PutActionRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('WebhookV2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManualRollback'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutomatedRollback'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('rollbackTargetPipelineExecutionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPipelines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelines'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineType'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('created'),
                        new \PHPStan\Type\Constant\ConstantStringType('updated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('V2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRuleExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ruleExecutionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Abandoned'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('resolvedConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('category'),
                                new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3location'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('executionResult'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('externalExecutionUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRuleTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ruleTypes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('settings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleConfigurationProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputArtifactDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('category'),
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('provider'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('thirdPartyConfigurationUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityUrlTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionUrlTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('revisionUrlTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('required'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('secret'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryable'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('String'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('minimumCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximumCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
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
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWebhooks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhooks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('definition'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastTriggered'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetPipeline'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('filters'),
                            new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticationConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('jsonPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchEquals'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_HMAC'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNAUTHENTICATED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedIPRange'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecretToken'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function overrideStageCondition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function pollForJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                        new \PHPStan\Type\Constant\ConstantStringType('nonce'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineContext'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputArtifacts'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('continuationToken'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('category'),
                                new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('pipelineName'),
                                new \PHPStan\Type\Constant\ConstantStringType('stage'),
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('pipelineArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionExecutionId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('objectKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function pollForThirdPartyJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putActionRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('newRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putApprovalResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('approvedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function putJobFailureResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putJobSuccessResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putThirdPartyJobFailureResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putThirdPartyJobSuccessResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhook'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTriggered'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetPipeline'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('jsonPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('matchEquals'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_HMAC'),
                            new \PHPStan\Type\Constant\ConstantStringType('IP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNAUTHENTICATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedIPRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretToken'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function registerWebhookWithThirdParty(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function retryStageExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rollbackStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startPipelineExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopPipelineExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionId'),
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
    private function updateActionType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactStore'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactStores'),
                    new \PHPStan\Type\Constant\ConstantStringType('stages'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineType'),
                    new \PHPStan\Type\Constant\ConstantStringType('variables'),
                    new \PHPStan\Type\Constant\ConstantStringType('triggers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('blockers'),
                            new \PHPStan\Type\Constant\ConstantStringType('actions'),
                            new \PHPStan\Type\Constant\ConstantStringType('onFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('onSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('beforeEntry'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runOrder'),
                                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                    new \PHPStan\Type\Constant\ConstantStringType('outputArtifacts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('outputVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Build'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Invoke'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Approval'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ThirdParty'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('files'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('result'),
                                new \PHPStan\Type\Constant\ConstantStringType('retryConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('retryMode'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_ACTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ALL_ACTIONS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('conditions'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SKIP'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ruleTypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                                                new \PHPStan\Type\Constant\ConstantStringType('commands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('inputArtifacts'),
                                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('region'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('V2'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('providerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CodeStarSourceConnection'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceActionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('push'),
                                new \PHPStan\Type\Constant\ConstantStringType('pullRequest'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                        new \PHPStan\Type\Constant\ConstantStringType('branches'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filePaths'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                                        new \PHPStan\Type\Constant\ConstantStringType('branches'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filePaths'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('includes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excludes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
}