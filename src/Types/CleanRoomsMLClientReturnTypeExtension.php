<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CleanRoomsMLClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CleanRoomsML\CleanRoomsMLClient>
     */
    public function getClass(): string
    {
        return \Aws\CleanRoomsML\CleanRoomsMLClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelTrainedModel',
            'cancelTrainedModelInferenceJob',
            'createAudienceModel',
            'createConfiguredAudienceModel',
            'createConfiguredModelAlgorithm',
            'createConfiguredModelAlgorithmAssociation',
            'createMLInputChannel',
            'createTrainedModel',
            'createTrainingDataset',
            'deleteAudienceGenerationJob',
            'deleteAudienceModel',
            'deleteConfiguredAudienceModel',
            'deleteConfiguredAudienceModelPolicy',
            'deleteConfiguredModelAlgorithm',
            'deleteConfiguredModelAlgorithmAssociation',
            'deleteMLConfiguration',
            'deleteMLInputChannelData',
            'deleteTrainedModelOutput',
            'deleteTrainingDataset',
            'getAudienceGenerationJob',
            'getAudienceModel',
            'getCollaborationConfiguredModelAlgorithmAssociation',
            'getCollaborationMLInputChannel',
            'getCollaborationTrainedModel',
            'getConfiguredAudienceModel',
            'getConfiguredAudienceModelPolicy',
            'getConfiguredModelAlgorithm',
            'getConfiguredModelAlgorithmAssociation',
            'getMLConfiguration',
            'getMLInputChannel',
            'getTrainedModel',
            'getTrainedModelInferenceJob',
            'getTrainingDataset',
            'listAudienceExportJobs',
            'listAudienceGenerationJobs',
            'listAudienceModels',
            'listCollaborationConfiguredModelAlgorithmAssociations',
            'listCollaborationMLInputChannels',
            'listCollaborationTrainedModelExportJobs',
            'listCollaborationTrainedModelInferenceJobs',
            'listCollaborationTrainedModels',
            'listConfiguredAudienceModels',
            'listConfiguredModelAlgorithmAssociations',
            'listConfiguredModelAlgorithms',
            'listMLInputChannels',
            'listTagsForResource',
            'listTrainedModelInferenceJobs',
            'listTrainedModels',
            'listTrainingDatasets',
            'putConfiguredAudienceModelPolicy',
            'putMLConfiguration',
            'startAudienceExportJob',
            'startAudienceGenerationJob',
            'startTrainedModelExportJob',
            'startTrainedModelInferenceJob',
            'tagResource',
            'untagResource',
            'updateConfiguredAudienceModel',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelTrainedModel' => $this->cancelTrainedModel(),
            'cancelTrainedModelInferenceJob' => $this->cancelTrainedModelInferenceJob(),
            'createAudienceModel' => $this->createAudienceModel(),
            'createConfiguredAudienceModel' => $this->createConfiguredAudienceModel(),
            'createConfiguredModelAlgorithm' => $this->createConfiguredModelAlgorithm(),
            'createConfiguredModelAlgorithmAssociation' => $this->createConfiguredModelAlgorithmAssociation(),
            'createMLInputChannel' => $this->createMLInputChannel(),
            'createTrainedModel' => $this->createTrainedModel(),
            'createTrainingDataset' => $this->createTrainingDataset(),
            'deleteAudienceGenerationJob' => $this->deleteAudienceGenerationJob(),
            'deleteAudienceModel' => $this->deleteAudienceModel(),
            'deleteConfiguredAudienceModel' => $this->deleteConfiguredAudienceModel(),
            'deleteConfiguredAudienceModelPolicy' => $this->deleteConfiguredAudienceModelPolicy(),
            'deleteConfiguredModelAlgorithm' => $this->deleteConfiguredModelAlgorithm(),
            'deleteConfiguredModelAlgorithmAssociation' => $this->deleteConfiguredModelAlgorithmAssociation(),
            'deleteMLConfiguration' => $this->deleteMLConfiguration(),
            'deleteMLInputChannelData' => $this->deleteMLInputChannelData(),
            'deleteTrainedModelOutput' => $this->deleteTrainedModelOutput(),
            'deleteTrainingDataset' => $this->deleteTrainingDataset(),
            'getAudienceGenerationJob' => $this->getAudienceGenerationJob(),
            'getAudienceModel' => $this->getAudienceModel(),
            'getCollaborationConfiguredModelAlgorithmAssociation' => $this->getCollaborationConfiguredModelAlgorithmAssociation(),
            'getCollaborationMLInputChannel' => $this->getCollaborationMLInputChannel(),
            'getCollaborationTrainedModel' => $this->getCollaborationTrainedModel(),
            'getConfiguredAudienceModel' => $this->getConfiguredAudienceModel(),
            'getConfiguredAudienceModelPolicy' => $this->getConfiguredAudienceModelPolicy(),
            'getConfiguredModelAlgorithm' => $this->getConfiguredModelAlgorithm(),
            'getConfiguredModelAlgorithmAssociation' => $this->getConfiguredModelAlgorithmAssociation(),
            'getMLConfiguration' => $this->getMLConfiguration(),
            'getMLInputChannel' => $this->getMLInputChannel(),
            'getTrainedModel' => $this->getTrainedModel(),
            'getTrainedModelInferenceJob' => $this->getTrainedModelInferenceJob(),
            'getTrainingDataset' => $this->getTrainingDataset(),
            'listAudienceExportJobs' => $this->listAudienceExportJobs(),
            'listAudienceGenerationJobs' => $this->listAudienceGenerationJobs(),
            'listAudienceModels' => $this->listAudienceModels(),
            'listCollaborationConfiguredModelAlgorithmAssociations' => $this->listCollaborationConfiguredModelAlgorithmAssociations(),
            'listCollaborationMLInputChannels' => $this->listCollaborationMLInputChannels(),
            'listCollaborationTrainedModelExportJobs' => $this->listCollaborationTrainedModelExportJobs(),
            'listCollaborationTrainedModelInferenceJobs' => $this->listCollaborationTrainedModelInferenceJobs(),
            'listCollaborationTrainedModels' => $this->listCollaborationTrainedModels(),
            'listConfiguredAudienceModels' => $this->listConfiguredAudienceModels(),
            'listConfiguredModelAlgorithmAssociations' => $this->listConfiguredModelAlgorithmAssociations(),
            'listConfiguredModelAlgorithms' => $this->listConfiguredModelAlgorithms(),
            'listMLInputChannels' => $this->listMLInputChannels(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTrainedModelInferenceJobs' => $this->listTrainedModelInferenceJobs(),
            'listTrainedModels' => $this->listTrainedModels(),
            'listTrainingDatasets' => $this->listTrainingDatasets(),
            'putConfiguredAudienceModelPolicy' => $this->putConfiguredAudienceModelPolicy(),
            'putMLConfiguration' => $this->putMLConfiguration(),
            'startAudienceExportJob' => $this->startAudienceExportJob(),
            'startAudienceGenerationJob' => $this->startAudienceGenerationJob(),
            'startTrainedModelExportJob' => $this->startTrainedModelExportJob(),
            'startTrainedModelInferenceJob' => $this->startTrainedModelInferenceJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateConfiguredAudienceModel' => $this->updateConfiguredAudienceModel(),
        };
    }
    private function cancelTrainedModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function cancelTrainedModelInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createAudienceModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('audienceModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfiguredAudienceModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfiguredModelAlgorithm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfiguredModelAlgorithmAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMLInputChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrainedModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrainingDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('trainingDatasetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAudienceGenerationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAudienceModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConfiguredAudienceModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConfiguredAudienceModelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConfiguredModelAlgorithm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConfiguredModelAlgorithmAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMLConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMLInputChannelData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTrainedModelOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTrainingDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAudienceGenerationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('audienceGenerationJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('seedAudience'),
                new \PHPStan\Type\Constant\ConstantStringType('includeSeedInOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                new \PHPStan\Type\Constant\ConstantStringType('metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('protectedQueryIdentifier'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sqlParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('sqlComputeConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisTemplateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('worker'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CR.1X'),
                                new \PHPStan\Type\Constant\ConstantStringType('CR.4X'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('relevanceMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('recallMetric'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('audienceSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAudienceModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('audienceModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCollaborationConfiguredModelAlgorithmAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('privacyConfiguration'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policies'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('trainedModels'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainedModelExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainedModelInferenceJobs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerMetrics'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAccountIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('noiseLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('filesToExport'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('GB'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('OUTPUT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxOutputSize'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAccountIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('GB'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCollaborationMLInputChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('retentionInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfRecords'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCollaborationTrainedModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('stoppingCondition'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('logsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('logsStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingContainerImageDigest'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeSizeInGB'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.10xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3dn.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p4d.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p4de.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p5.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.9xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.18xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.9xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.18xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.trn1.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.trn1.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.trn1n.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.24xlarge'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('maxRuntimeInSeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConfiguredAudienceModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('audienceModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('outputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('sharedAudienceMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('minMatchingSeedSize'),
                new \PHPStan\Type\Constant\ConstantStringType('audienceSizeConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('childResourceTagOnCreatePolicy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('audienceSizeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('audienceSizeBins'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FROM_PARENT_RESOURCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
            ]),
        ]);
    }
    private function getConfiguredAudienceModelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('policyHash'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConfiguredModelAlgorithm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingContainerConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('inferenceContainerConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('entrypoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('arguments'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricDefinitions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('regex'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageUri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConfiguredModelAlgorithmAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('privacyConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policies'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('trainedModels'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainedModelExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainedModelInferenceJobs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerMetrics'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAccountIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('noiseLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('filesToExport'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('GB'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('OUTPUT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxOutputSize'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowedAccountIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('GB'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getMLConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultOutputLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getMLInputChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('inputChannel'),
                new \PHPStan\Type\Constant\ConstantStringType('protectedQueryIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('retentionInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfRecords'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfFiles'),
                new \PHPStan\Type\Constant\ConstantStringType('sizeInGb'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('protectedQueryInputParameters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sqlParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('analysisTemplateArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('worker'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('number'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CR.1X'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CR.4X'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getTrainedModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('stoppingCondition'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('logsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('logsStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingContainerImageDigest'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('hyperparameters'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('dataChannels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeSizeInGB'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.10xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3dn.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p4d.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p4de.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p5.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.9xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.18xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.9xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.18xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.trn1.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.trn1.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.trn1n.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5d.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.t3.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r5.24xlarge'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('maxRuntimeInSeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTrainedModelInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('trainedModelInferenceJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('containerExecutionParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('inferenceContainerImageDigest'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('logsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('logsStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.9xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c7i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c6i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.18xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.48xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g5.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.10xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m7i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r7i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.r6i.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m6i.32xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.4xlarge'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accept'),
                    new \PHPStan\Type\Constant\ConstantStringType('members'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('maxPayloadInMB'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getTrainingDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingData'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('INTERACTIONS'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('schema'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('columnTypes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USER_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('ITEM_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('CATEGORICAL_FEATURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUMERICAL_FEATURE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('glueDataSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('catalogId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAudienceExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('audienceExportJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('audienceGenerationJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('audienceSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAudienceGenerationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('audienceGenerationJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('audienceGenerationJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAudienceModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('audienceModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('audienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('trainingDatasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCollaborationConfiguredModelAlgorithmAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationConfiguredModelAlgorithmAssociations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCollaborationMLInputChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationMLInputChannelsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCollaborationTrainedModelExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationTrainedModelExportJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('members'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCollaborationTrainedModelInferenceJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationTrainedModelInferenceJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('trainedModelInferenceJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('logsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('logsStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accept'),
                        new \PHPStan\Type\Constant\ConstantStringType('members'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCollaborationTrainedModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('collaborationTrainedModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creatorAccountId'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listConfiguredAudienceModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('audienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                ]),
            ]),
        ]);
    }
    private function listConfiguredModelAlgorithmAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listConfiguredModelAlgorithms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithms'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listMLInputChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociations'),
                    new \PHPStan\Type\Constant\ConstantStringType('protectedQueryIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('mlInputChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
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
    private function listTrainedModelInferenceJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('trainedModelInferenceJobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('trainedModelInferenceJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('logsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('logsStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accept'),
                        new \PHPStan\Type\Constant\ConstantStringType('members'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listTrainedModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('trainedModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('trainedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('collaborationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuredModelAlgorithmAssociationArn'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listTrainingDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDatasets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('trainingDatasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putConfiguredAudienceModelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('policyHash'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putMLConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startAudienceExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startAudienceGenerationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('audienceGenerationJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTrainedModelExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startTrainedModelInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('trainedModelInferenceJobArn'),
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
    private function updateConfiguredAudienceModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuredAudienceModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}