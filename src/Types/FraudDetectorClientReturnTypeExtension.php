<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class FraudDetectorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\FraudDetector\FraudDetectorClient>
     */
    public function getClass(): string
    {
        return \Aws\FraudDetector\FraudDetectorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchCreateVariable',
            'batchGetVariable',
            'cancelBatchImportJob',
            'cancelBatchPredictionJob',
            'createBatchImportJob',
            'createBatchPredictionJob',
            'createDetectorVersion',
            'createList',
            'createModel',
            'createModelVersion',
            'createRule',
            'createVariable',
            'deleteBatchImportJob',
            'deleteBatchPredictionJob',
            'deleteDetector',
            'deleteDetectorVersion',
            'deleteEntityType',
            'deleteEvent',
            'deleteEventType',
            'deleteEventsByEventType',
            'deleteExternalModel',
            'deleteLabel',
            'deleteList',
            'deleteModel',
            'deleteModelVersion',
            'deleteOutcome',
            'deleteRule',
            'deleteVariable',
            'describeDetector',
            'describeModelVersions',
            'getBatchImportJobs',
            'getBatchPredictionJobs',
            'getDeleteEventsByEventTypeStatus',
            'getDetectorVersion',
            'getDetectors',
            'getEntityTypes',
            'getEvent',
            'getEventPrediction',
            'getEventPredictionMetadata',
            'getEventTypes',
            'getExternalModels',
            'getKMSEncryptionKey',
            'getLabels',
            'getListElements',
            'getListsMetadata',
            'getModelVersion',
            'getModels',
            'getOutcomes',
            'getRules',
            'getVariables',
            'listEventPredictions',
            'listTagsForResource',
            'putDetector',
            'putEntityType',
            'putEventType',
            'putExternalModel',
            'putKMSEncryptionKey',
            'putLabel',
            'putOutcome',
            'sendEvent',
            'tagResource',
            'untagResource',
            'updateDetectorVersion',
            'updateDetectorVersionMetadata',
            'updateDetectorVersionStatus',
            'updateEventLabel',
            'updateList',
            'updateModel',
            'updateModelVersion',
            'updateModelVersionStatus',
            'updateRuleMetadata',
            'updateRuleVersion',
            'updateVariable',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchCreateVariable' => $this->batchCreateVariable(),
            'batchGetVariable' => $this->batchGetVariable(),
            'cancelBatchImportJob' => $this->cancelBatchImportJob(),
            'cancelBatchPredictionJob' => $this->cancelBatchPredictionJob(),
            'createBatchImportJob' => $this->createBatchImportJob(),
            'createBatchPredictionJob' => $this->createBatchPredictionJob(),
            'createDetectorVersion' => $this->createDetectorVersion(),
            'createList' => $this->createList(),
            'createModel' => $this->createModel(),
            'createModelVersion' => $this->createModelVersion(),
            'createRule' => $this->createRule(),
            'createVariable' => $this->createVariable(),
            'deleteBatchImportJob' => $this->deleteBatchImportJob(),
            'deleteBatchPredictionJob' => $this->deleteBatchPredictionJob(),
            'deleteDetector' => $this->deleteDetector(),
            'deleteDetectorVersion' => $this->deleteDetectorVersion(),
            'deleteEntityType' => $this->deleteEntityType(),
            'deleteEvent' => $this->deleteEvent(),
            'deleteEventType' => $this->deleteEventType(),
            'deleteEventsByEventType' => $this->deleteEventsByEventType(),
            'deleteExternalModel' => $this->deleteExternalModel(),
            'deleteLabel' => $this->deleteLabel(),
            'deleteList' => $this->deleteList(),
            'deleteModel' => $this->deleteModel(),
            'deleteModelVersion' => $this->deleteModelVersion(),
            'deleteOutcome' => $this->deleteOutcome(),
            'deleteRule' => $this->deleteRule(),
            'deleteVariable' => $this->deleteVariable(),
            'describeDetector' => $this->describeDetector(),
            'describeModelVersions' => $this->describeModelVersions(),
            'getBatchImportJobs' => $this->getBatchImportJobs(),
            'getBatchPredictionJobs' => $this->getBatchPredictionJobs(),
            'getDeleteEventsByEventTypeStatus' => $this->getDeleteEventsByEventTypeStatus(),
            'getDetectorVersion' => $this->getDetectorVersion(),
            'getDetectors' => $this->getDetectors(),
            'getEntityTypes' => $this->getEntityTypes(),
            'getEvent' => $this->getEvent(),
            'getEventPrediction' => $this->getEventPrediction(),
            'getEventPredictionMetadata' => $this->getEventPredictionMetadata(),
            'getEventTypes' => $this->getEventTypes(),
            'getExternalModels' => $this->getExternalModels(),
            'getKMSEncryptionKey' => $this->getKMSEncryptionKey(),
            'getLabels' => $this->getLabels(),
            'getListElements' => $this->getListElements(),
            'getListsMetadata' => $this->getListsMetadata(),
            'getModelVersion' => $this->getModelVersion(),
            'getModels' => $this->getModels(),
            'getOutcomes' => $this->getOutcomes(),
            'getRules' => $this->getRules(),
            'getVariables' => $this->getVariables(),
            'listEventPredictions' => $this->listEventPredictions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putDetector' => $this->putDetector(),
            'putEntityType' => $this->putEntityType(),
            'putEventType' => $this->putEventType(),
            'putExternalModel' => $this->putExternalModel(),
            'putKMSEncryptionKey' => $this->putKMSEncryptionKey(),
            'putLabel' => $this->putLabel(),
            'putOutcome' => $this->putOutcome(),
            'sendEvent' => $this->sendEvent(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDetectorVersion' => $this->updateDetectorVersion(),
            'updateDetectorVersionMetadata' => $this->updateDetectorVersionMetadata(),
            'updateDetectorVersionStatus' => $this->updateDetectorVersionStatus(),
            'updateEventLabel' => $this->updateEventLabel(),
            'updateList' => $this->updateList(),
            'updateModel' => $this->updateModel(),
            'updateModelVersion' => $this->updateModelVersion(),
            'updateModelVersionStatus' => $this->updateModelVersionStatus(),
            'updateRuleMetadata' => $this->updateRuleMetadata(),
            'updateRuleVersion' => $this->updateRuleVersion(),
            'updateVariable' => $this->updateVariable(),
        };
    }
    private function batchCreateVariable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetVariable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('variableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATETIME'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL_SCORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_MODEL_SCORE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function cancelBatchImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelBatchPredictionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createBatchImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createBatchPredictionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDetectorVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                new \PHPStan\Type\Constant\ConstantStringType('detectorVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
            ]),
        ]);
    }
    private function createList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createModelVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                new \PHPStan\Type\Constant\ConstantStringType('modelVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONLINE_FRAUD_INSIGHTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTION_FRAUD_INSIGHTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TAKEOVER_INSIGHTS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('rule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVariable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteBatchImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteBatchPredictionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDetectorVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEntityType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEventType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEventsByEventType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('eventsDeletionStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteExternalModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteModelVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteOutcome(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteVariable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                new \PHPStan\Type\Constant\ConstantStringType('detectorVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detectorVersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeModelVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelVersionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelVersionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainingDataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainingDataSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalEventsDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('ingestedEventsDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainingResult'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('trainingResultV2'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONLINE_FRAUD_INSIGHTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSACTION_FRAUD_INSIGHTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TAKEOVER_INSIGHTS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_EVENTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INGESTED_EVENTS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('labelSchema'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('labelMapper'),
                                new \PHPStan\Type\Constant\ConstantStringType('unlabeledEventsTreatment'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ]))),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FRAUD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LEGIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataAccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ingestedEventsTimeWindow'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataValidationMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('trainingMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('variableImportanceMetrics'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileLevelMessages'),
                                new \PHPStan\Type\Constant\ConstantStringType('fieldLevelMessages'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('auc'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricDataPoints'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fpr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('precision'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tpr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logOddsMetrics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('variableName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('variableType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('variableImportance'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataValidationMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('trainingMetricsV2'),
                            new \PHPStan\Type\Constant\ConstantStringType('variableImportanceMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('aggregatedVariablesImportanceMetrics'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileLevelMessages'),
                                new \PHPStan\Type\Constant\ConstantStringType('fieldLevelMessages'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ofi'),
                                new \PHPStan\Type\Constant\ConstantStringType('tfi'),
                                new \PHPStan\Type\Constant\ConstantStringType('ati'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metricDataPoints'),
                                    new \PHPStan\Type\Constant\ConstantStringType('modelPerformance'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('fpr'),
                                            new \PHPStan\Type\Constant\ConstantStringType('precision'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tpr'),
                                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('auc'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uncertaintyRange'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('lowerBoundValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('upperBoundValue'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metricDataPoints'),
                                    new \PHPStan\Type\Constant\ConstantStringType('modelPerformance'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('fpr'),
                                            new \PHPStan\Type\Constant\ConstantStringType('precision'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tpr'),
                                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('auc'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uncertaintyRange'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('lowerBoundValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('upperBoundValue'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metricDataPoints'),
                                    new \PHPStan\Type\Constant\ConstantStringType('modelPerformance'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('cr'),
                                            new \PHPStan\Type\Constant\ConstantStringType('adr'),
                                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                            new \PHPStan\Type\Constant\ConstantStringType('atodr'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('asi'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logOddsMetrics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('variableName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('variableType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('variableImportance'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logOddsMetrics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('variableNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedVariablesImportance'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBatchImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('batchImports'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('completionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('processedRecordsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedRecordsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalRecordsCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBatchPredictionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('batchPredictions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('completionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastHeartbeatTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('processedRecordsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalRecordsCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDeleteEventsByEventTypeStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('eventsDeletionStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function getDetectorVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                new \PHPStan\Type\Constant\ConstantStringType('detectorVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('externalModelEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('modelVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('rules'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ruleExecutionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelVersionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONLINE_FRAUD_INSIGHTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSACTION_FRAUD_INSIGHTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TAKEOVER_INSIGHTS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALL_MATCHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIRST_MATCHED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEntityTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('entityTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('event'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('labelTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('entities'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getEventPrediction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelScores'),
                new \PHPStan\Type\Constant\ConstantStringType('ruleResults'),
                new \PHPStan\Type\Constant\ConstantStringType('externalModelOutputs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('scores'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelVersionNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ONLINE_FRAUD_INSIGHTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSACTION_FRAUD_INSIGHTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TAKEOVER_INSIGHTS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\FloatType()),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('outcomes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('modelEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelSource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SAGEMAKER'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getEventPredictionMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                new \PHPStan\Type\Constant\ConstantStringType('detectorVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('detectorVersionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('eventVariables'),
                new \PHPStan\Type\Constant\ConstantStringType('rules'),
                new \PHPStan\Type\Constant\ConstantStringType('ruleExecutionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('outcomes'),
                new \PHPStan\Type\Constant\ConstantStringType('evaluatedModelVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('evaluatedExternalModels'),
                new \PHPStan\Type\Constant\ConstantStringType('predictionTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('expressionWithValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('outcomes'),
                        new \PHPStan\Type\Constant\ConstantStringType('evaluated'),
                        new \PHPStan\Type\Constant\ConstantStringType('matched'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALL_MATCHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIRST_MATCHED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                        new \PHPStan\Type\Constant\ConstantStringType('evaluations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('outputVariableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('evaluationScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('predictionExplanations'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('variableImpactExplanations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('aggregatedVariablesImpactExplanations'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('eventVariableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('relativeImpact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('logOddsImpact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('eventVariableNames'),
                                            new \PHPStan\Type\Constant\ConstantStringType('relativeImpact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('logOddsImpact'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('useEventVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputVariables'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEventTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventIngestion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ingestedEventStatistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventOrchestration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('eventDataSizeInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('leastRecentEvent'),
                            new \PHPStan\Type\Constant\ConstantStringType('mostRecentEvent'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eventBridgeEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getExternalModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('externalModels'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('invokeModelEndpointRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelEndpointStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('SAGEMAKER'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('format'),
                            new \PHPStan\Type\Constant\ConstantStringType('useEventVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('jsonInputTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('csvInputTemplate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT_CSV'),
                                new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_JSON'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('format'),
                            new \PHPStan\Type\Constant\ConstantStringType('jsonKeyToVariableMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('csvIndexToVariableMap'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT_CSV'),
                                new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_JSONLINES'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKMSEncryptionKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsEncryptionKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('labels'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getListElements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('elements'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getListsMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lists'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('variableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModelVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                new \PHPStan\Type\Constant\ConstantStringType('modelVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('trainingDataSchema'),
                new \PHPStan\Type\Constant\ConstantStringType('externalEventsDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('ingestedEventsDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONLINE_FRAUD_INSIGHTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTION_FRAUD_INSIGHTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TAKEOVER_INSIGHTS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_EVENTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('INGESTED_EVENTS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('modelVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('labelSchema'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('labelMapper'),
                        new \PHPStan\Type\Constant\ConstantStringType('unlabeledEventsTreatment'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ]))),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRAUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('LEGIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataAccessRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ingestedEventsTimeWindow'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('models'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONLINE_FRAUD_INSIGHTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSACTION_FRAUD_INSIGHTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TAKEOVER_INSIGHTS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getOutcomes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('outcomes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ruleDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('language'),
                        new \PHPStan\Type\Constant\ConstantStringType('outcomes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DETECTORPL'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getVariables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('variableType'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATETIME'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODEL_SCORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_MODEL_SCORE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventPredictions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventPredictionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('predictionTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorVersionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
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
    private function putDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putEntityType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putEventType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putExternalModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putKMSEncryptionKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putOutcome(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendEvent(): ?\PHPStan\Type\Type
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
    private function updateDetectorVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDetectorVersionMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDetectorVersionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEventLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateModelVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('modelId'),
                new \PHPStan\Type\Constant\ConstantStringType('modelType'),
                new \PHPStan\Type\Constant\ConstantStringType('modelVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONLINE_FRAUD_INSIGHTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSACTION_FRAUD_INSIGHTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_TAKEOVER_INSIGHTS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateModelVersionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRuleMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRuleVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('rule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateVariable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}