<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BedrockClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Bedrock\BedrockClient>
     */
    public function getClass(): string
    {
        return \Aws\Bedrock\BedrockClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchDeleteEvaluationJob',
            'createEvaluationJob',
            'createGuardrail',
            'createGuardrailVersion',
            'createInferenceProfile',
            'createMarketplaceModelEndpoint',
            'createModelCopyJob',
            'createModelCustomizationJob',
            'createModelImportJob',
            'createModelInvocationJob',
            'createPromptRouter',
            'createProvisionedModelThroughput',
            'deleteCustomModel',
            'deleteGuardrail',
            'deleteImportedModel',
            'deleteInferenceProfile',
            'deleteMarketplaceModelEndpoint',
            'deleteModelInvocationLoggingConfiguration',
            'deletePromptRouter',
            'deleteProvisionedModelThroughput',
            'deregisterMarketplaceModelEndpoint',
            'getCustomModel',
            'getEvaluationJob',
            'getFoundationModel',
            'getGuardrail',
            'getImportedModel',
            'getInferenceProfile',
            'getMarketplaceModelEndpoint',
            'getModelCopyJob',
            'getModelCustomizationJob',
            'getModelImportJob',
            'getModelInvocationJob',
            'getModelInvocationLoggingConfiguration',
            'getPromptRouter',
            'getProvisionedModelThroughput',
            'listCustomModels',
            'listEvaluationJobs',
            'listFoundationModels',
            'listGuardrails',
            'listImportedModels',
            'listInferenceProfiles',
            'listMarketplaceModelEndpoints',
            'listModelCopyJobs',
            'listModelCustomizationJobs',
            'listModelImportJobs',
            'listModelInvocationJobs',
            'listPromptRouters',
            'listProvisionedModelThroughputs',
            'listTagsForResource',
            'putModelInvocationLoggingConfiguration',
            'registerMarketplaceModelEndpoint',
            'stopEvaluationJob',
            'stopModelCustomizationJob',
            'stopModelInvocationJob',
            'tagResource',
            'untagResource',
            'updateGuardrail',
            'updateMarketplaceModelEndpoint',
            'updateProvisionedModelThroughput',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchDeleteEvaluationJob' => $this->batchDeleteEvaluationJob(),
            'createEvaluationJob' => $this->createEvaluationJob(),
            'createGuardrail' => $this->createGuardrail(),
            'createGuardrailVersion' => $this->createGuardrailVersion(),
            'createInferenceProfile' => $this->createInferenceProfile(),
            'createMarketplaceModelEndpoint' => $this->createMarketplaceModelEndpoint(),
            'createModelCopyJob' => $this->createModelCopyJob(),
            'createModelCustomizationJob' => $this->createModelCustomizationJob(),
            'createModelImportJob' => $this->createModelImportJob(),
            'createModelInvocationJob' => $this->createModelInvocationJob(),
            'createPromptRouter' => $this->createPromptRouter(),
            'createProvisionedModelThroughput' => $this->createProvisionedModelThroughput(),
            'deleteCustomModel' => $this->deleteCustomModel(),
            'deleteGuardrail' => $this->deleteGuardrail(),
            'deleteImportedModel' => $this->deleteImportedModel(),
            'deleteInferenceProfile' => $this->deleteInferenceProfile(),
            'deleteMarketplaceModelEndpoint' => $this->deleteMarketplaceModelEndpoint(),
            'deleteModelInvocationLoggingConfiguration' => $this->deleteModelInvocationLoggingConfiguration(),
            'deletePromptRouter' => $this->deletePromptRouter(),
            'deleteProvisionedModelThroughput' => $this->deleteProvisionedModelThroughput(),
            'deregisterMarketplaceModelEndpoint' => $this->deregisterMarketplaceModelEndpoint(),
            'getCustomModel' => $this->getCustomModel(),
            'getEvaluationJob' => $this->getEvaluationJob(),
            'getFoundationModel' => $this->getFoundationModel(),
            'getGuardrail' => $this->getGuardrail(),
            'getImportedModel' => $this->getImportedModel(),
            'getInferenceProfile' => $this->getInferenceProfile(),
            'getMarketplaceModelEndpoint' => $this->getMarketplaceModelEndpoint(),
            'getModelCopyJob' => $this->getModelCopyJob(),
            'getModelCustomizationJob' => $this->getModelCustomizationJob(),
            'getModelImportJob' => $this->getModelImportJob(),
            'getModelInvocationJob' => $this->getModelInvocationJob(),
            'getModelInvocationLoggingConfiguration' => $this->getModelInvocationLoggingConfiguration(),
            'getPromptRouter' => $this->getPromptRouter(),
            'getProvisionedModelThroughput' => $this->getProvisionedModelThroughput(),
            'listCustomModels' => $this->listCustomModels(),
            'listEvaluationJobs' => $this->listEvaluationJobs(),
            'listFoundationModels' => $this->listFoundationModels(),
            'listGuardrails' => $this->listGuardrails(),
            'listImportedModels' => $this->listImportedModels(),
            'listInferenceProfiles' => $this->listInferenceProfiles(),
            'listMarketplaceModelEndpoints' => $this->listMarketplaceModelEndpoints(),
            'listModelCopyJobs' => $this->listModelCopyJobs(),
            'listModelCustomizationJobs' => $this->listModelCustomizationJobs(),
            'listModelImportJobs' => $this->listModelImportJobs(),
            'listModelInvocationJobs' => $this->listModelInvocationJobs(),
            'listPromptRouters' => $this->listPromptRouters(),
            'listProvisionedModelThroughputs' => $this->listProvisionedModelThroughputs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putModelInvocationLoggingConfiguration' => $this->putModelInvocationLoggingConfiguration(),
            'registerMarketplaceModelEndpoint' => $this->registerMarketplaceModelEndpoint(),
            'stopEvaluationJob' => $this->stopEvaluationJob(),
            'stopModelCustomizationJob' => $this->stopModelCustomizationJob(),
            'stopModelInvocationJob' => $this->stopModelInvocationJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateGuardrail' => $this->updateGuardrail(),
            'updateMarketplaceModelEndpoint' => $this->updateMarketplaceModelEndpoint(),
            'updateProvisionedModelThroughput' => $this->updateProvisionedModelThroughput(),
        };
    }
    private function batchDeleteEvaluationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('evaluationJobs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createEvaluationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('guardrailId'),
                new \PHPStan\Type\Constant\ConstantStringType('guardrailArn'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createGuardrailVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('guardrailId'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createInferenceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
            ]),
        ]);
    }
    private function createMarketplaceModelEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('marketplaceModelEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_ENDPOINT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sageMaker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initialInstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsEncryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpc'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createModelCopyJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createModelCustomizationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createModelImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createModelInvocationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPromptRouter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('promptRouterArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProvisionedModelThroughput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('provisionedModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteCustomModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteImportedModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInferenceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMarketplaceModelEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteModelInvocationLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePromptRouter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProvisionedModelThroughput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterMarketplaceModelEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getCustomModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('baseModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('customizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('modelKmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('hyperParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('validationDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('validationMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('customizationConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FINE_TUNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_PRE_TRAINING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISTILLATION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('invocationLogsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('usePromptResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('invocationLogSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestMetadataFilters'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('equals'),
                            new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                            new \PHPStan\Type\Constant\ConstantStringType('andAll'),
                            new \PHPStan\Type\Constant\ConstantStringType('orAll'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('validators'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('trainingLoss'),
                ], [
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('validationLoss'),
                ], [
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('distillationConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('teacherModelConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('teacherModelIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxResponseLengthForInference'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getEvaluationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('customerEncryptionKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('evaluationConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('inferenceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessages'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Human'),
                    new \PHPStan\Type\Constant\ConstantStringType('Automated'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelEvaluation'),
                    new \PHPStan\Type\Constant\ConstantStringType('RagEvaluation'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('automated'),
                    new \PHPStan\Type\Constant\ConstantStringType('human'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('datasetMetricConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('evaluatorModelConfig'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('taskType'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataset'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricNames'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Summarization'),
                                new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                                new \PHPStan\Type\Constant\ConstantStringType('QuestionAndAnswer'),
                                new \PHPStan\Type\Constant\ConstantStringType('Generation'),
                                new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('datasetLocation'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bedrockEvaluatorModels'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelIdentifier'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('humanWorkflowConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('customMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('datasetMetricConfigs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('flowDefinitionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('instructions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('ratingMethod'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('taskType'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataset'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricNames'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Summarization'),
                                new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                                new \PHPStan\Type\Constant\ConstantStringType('QuestionAndAnswer'),
                                new \PHPStan\Type\Constant\ConstantStringType('Generation'),
                                new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('datasetLocation'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('models'),
                    new \PHPStan\Type\Constant\ConstantStringType('ragConfigs'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bedrockModel'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('inferenceParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('performanceConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('latency'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optimized'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('retrieveConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('retrieveAndGenerateConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseRetrievalConfiguration'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('numberOfResults'),
                                        new \PHPStan\Type\Constant\ConstantStringType('overrideSearchType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filter'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('equals'),
                                            new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                                            new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                            new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEquals'),
                                            new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                            new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEquals'),
                                            new \PHPStan\Type\Constant\ConstantStringType('in'),
                                            new \PHPStan\Type\Constant\ConstantStringType('notIn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('startsWith'),
                                            new \PHPStan\Type\Constant\ConstantStringType('listContains'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringContains'),
                                            new \PHPStan\Type\Constant\ConstantStringType('andAll'),
                                            new \PHPStan\Type\Constant\ConstantStringType('orAll'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('externalSourcesConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_SOURCES'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('retrievalConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('generationConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('orchestrationConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('numberOfResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('overrideSearchType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('filter'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('HYBRID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEMANTIC'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('equals'),
                                                new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                                                new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                                new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEquals'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                                new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEquals'),
                                                new \PHPStan\Type\Constant\ConstantStringType('in'),
                                                new \PHPStan\Type\Constant\ConstantStringType('notIn'),
                                                new \PHPStan\Type\Constant\ConstantStringType('startsWith'),
                                                new \PHPStan\Type\Constant\ConstantStringType('listContains'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stringContains'),
                                                new \PHPStan\Type\Constant\ConstantStringType('andAll'),
                                                new \PHPStan\Type\Constant\ConstantStringType('orAll'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                                ]),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('promptTemplate'),
                                        new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('kbInferenceConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('textPromptTemplate'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('guardrailId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('textInferenceConfig'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                            ], [
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('queryTransformationConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_DECOMPOSITION'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('generationConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BYTE_CONTENT'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('data'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ResourceType(),
                                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('promptTemplate'),
                                        new \PHPStan\Type\Constant\ConstantStringType('guardrailConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('kbInferenceConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelRequestFields'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('textPromptTemplate'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('guardrailId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('guardrailVersion'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('textInferenceConfig'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                                new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                                new \PHPStan\Type\Constant\ConstantStringType('maxTokens'),
                                                new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                            ], [
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getFoundationModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputModalities'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputModalities'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseStreamingSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('customizationsSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceTypesSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelLifecycle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMBEDDING'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMBEDDING'),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FINE_TUNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_PRE_TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTILLATION'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LEGACY'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('guardrailId'),
                new \PHPStan\Type\Constant\ConstantStringType('guardrailArn'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReasons'),
                new \PHPStan\Type\Constant\ConstantStringType('failureRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('blockedInputMessaging'),
                new \PHPStan\Type\Constant\ConstantStringType('blockedOutputsMessaging'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('topics'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('definition'),
                        new \PHPStan\Type\Constant\ConstantStringType('examples'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('filters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputStrength'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputStrength'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputModalities'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputModalities'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        ])),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('words'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                    new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZE'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('filters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getImportedModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('modelDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('modelArchitecture'),
                new \PHPStan\Type\Constant\ConstantStringType('modelKmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('instructSupported'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3DataSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getInferenceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('models'),
                new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_DEFINED'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                ]),
            ]),
        ]);
    }
    private function getMarketplaceModelEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('marketplaceModelEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_ENDPOINT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sageMaker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initialInstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsEncryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpc'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getModelCopyJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('targetModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('targetModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('targetModelKmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('targetModelTags'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceModelName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModelCustomizationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('outputModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('outputModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('baseModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('hyperParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('validationDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('customizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('outputModelKmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('validationMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('customizationConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('invocationLogsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('usePromptResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('invocationLogSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestMetadataFilters'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('equals'),
                            new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                            new \PHPStan\Type\Constant\ConstantStringType('andAll'),
                            new \PHPStan\Type\Constant\ConstantStringType('orAll'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('equals'),
                                new \PHPStan\Type\Constant\ConstantStringType('notEquals'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('validators'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FINE_TUNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_PRE_TRAINING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISTILLATION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('trainingLoss'),
                ], [
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('validationLoss'),
                ], [
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('distillationConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('teacherModelConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('teacherModelIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxResponseLengthForInference'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getModelImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('importedModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('importedModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('modelDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('importedModelKmsKeyArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3DataSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModelInvocationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('submitTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('inputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutDurationInHours'),
                new \PHPStan\Type\Constant\ConstantStringType('jobExpirationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartiallyCompleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3InputDataConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('JSONL'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputDataConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getModelInvocationLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('textDataDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageDataDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('embeddingDataDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('videoDataDeliveryEnabled'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('largeDataDeliveryS3Config'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getPromptRouter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('promptRouterName'),
                new \PHPStan\Type\Constant\ConstantStringType('routingCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('promptRouterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('models'),
                new \PHPStan\Type\Constant\ConstantStringType('fallbackModel'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('responseQualityDifference'),
                ], [
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('custom'),
                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                ]),
            ]),
        ]);
    }
    private function getProvisionedModelThroughput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('desiredModelUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('desiredModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('foundationModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('commitmentDuration'),
                new \PHPStan\Type\Constant\ConstantStringType('commitmentExpirationTime'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('InService'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OneMonth'),
                    new \PHPStan\Type\Constant\ConstantStringType('SixMonths'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listCustomModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('modelSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('baseModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('baseModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('customizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FINE_TUNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_PRE_TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTILLATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listEvaluationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('jobSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('evaluationTaskTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ragIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('evaluatorModelIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Human'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automated'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Summarization'),
                        new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuestionAndAnswer'),
                        new \PHPStan\Type\Constant\ConstantStringType('Generation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Custom'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ModelEvaluation'),
                        new \PHPStan\Type\Constant\ConstantStringType('RagEvaluation'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFoundationModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelSummaries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputModalities'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputModalities'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseStreamingSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('customizationsSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceTypesSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelLifecycle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMBEDDING'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMBEDDING'),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FINE_TUNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_PRE_TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTILLATION'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LEGACY'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listGuardrails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('guardrails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
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
    private function listImportedModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('modelSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('instructSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelArchitecture'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listInferenceProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('models'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_DEFINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMarketplaceModelEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('marketplaceModelEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_ENDPOINT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listModelCopyJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('modelCopyJobSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetModelKmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetModelTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceModelName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listModelCustomizationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('modelCustomizationJobSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('baseModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('customModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('customModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('customizationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FINE_TUNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_PRE_TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTILLATION'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listModelImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('modelImportJobSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('importedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('importedModelName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listModelInvocationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('invocationJobSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('submitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutDurationInHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobExpirationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Submitted'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartiallyCompleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3InputDataConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3InputFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('JSONL'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3OutputDataConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listPromptRouters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('promptRouterSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('promptRouterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('routingCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('promptRouterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('models'),
                    new \PHPStan\Type\Constant\ConstantStringType('fallbackModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('responseQualityDifference'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisionedModelThroughputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedModelSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('provisionedModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisionedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('foundationModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredModelUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitmentDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitmentExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('InService'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OneMonth'),
                        new \PHPStan\Type\Constant\ConstantStringType('SixMonths'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putModelInvocationLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerMarketplaceModelEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('marketplaceModelEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_ENDPOINT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sageMaker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initialInstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsEncryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpc'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function stopEvaluationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopModelCustomizationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopModelInvocationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('guardrailId'),
                new \PHPStan\Type\Constant\ConstantStringType('guardrailArn'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateMarketplaceModelEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('marketplaceModelEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_ENDPOINT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sageMaker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initialInstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsEncryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpc'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateProvisionedModelThroughput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}