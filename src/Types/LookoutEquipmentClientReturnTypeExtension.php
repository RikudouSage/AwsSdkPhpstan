<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LookoutEquipmentClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LookoutEquipment\LookoutEquipmentClient>
     */
    public function getClass(): string
    {
        return \Aws\LookoutEquipment\LookoutEquipmentClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createDataset',
            'createInferenceScheduler',
            'createLabel',
            'createLabelGroup',
            'createModel',
            'createRetrainingScheduler',
            'deleteDataset',
            'deleteInferenceScheduler',
            'deleteLabel',
            'deleteLabelGroup',
            'deleteModel',
            'deleteResourcePolicy',
            'deleteRetrainingScheduler',
            'describeDataIngestionJob',
            'describeDataset',
            'describeInferenceScheduler',
            'describeLabel',
            'describeLabelGroup',
            'describeModel',
            'describeModelVersion',
            'describeResourcePolicy',
            'describeRetrainingScheduler',
            'importDataset',
            'importModelVersion',
            'listDataIngestionJobs',
            'listDatasets',
            'listInferenceEvents',
            'listInferenceExecutions',
            'listInferenceSchedulers',
            'listLabelGroups',
            'listLabels',
            'listModelVersions',
            'listModels',
            'listRetrainingSchedulers',
            'listSensorStatistics',
            'listTagsForResource',
            'putResourcePolicy',
            'startDataIngestionJob',
            'startInferenceScheduler',
            'startRetrainingScheduler',
            'stopInferenceScheduler',
            'stopRetrainingScheduler',
            'tagResource',
            'untagResource',
            'updateActiveModelVersion',
            'updateInferenceScheduler',
            'updateLabelGroup',
            'updateModel',
            'updateRetrainingScheduler',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createDataset' => $this->createDataset(),
            'createInferenceScheduler' => $this->createInferenceScheduler(),
            'createLabel' => $this->createLabel(),
            'createLabelGroup' => $this->createLabelGroup(),
            'createModel' => $this->createModel(),
            'createRetrainingScheduler' => $this->createRetrainingScheduler(),
            'deleteDataset' => $this->deleteDataset(),
            'deleteInferenceScheduler' => $this->deleteInferenceScheduler(),
            'deleteLabel' => $this->deleteLabel(),
            'deleteLabelGroup' => $this->deleteLabelGroup(),
            'deleteModel' => $this->deleteModel(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteRetrainingScheduler' => $this->deleteRetrainingScheduler(),
            'describeDataIngestionJob' => $this->describeDataIngestionJob(),
            'describeDataset' => $this->describeDataset(),
            'describeInferenceScheduler' => $this->describeInferenceScheduler(),
            'describeLabel' => $this->describeLabel(),
            'describeLabelGroup' => $this->describeLabelGroup(),
            'describeModel' => $this->describeModel(),
            'describeModelVersion' => $this->describeModelVersion(),
            'describeResourcePolicy' => $this->describeResourcePolicy(),
            'describeRetrainingScheduler' => $this->describeRetrainingScheduler(),
            'importDataset' => $this->importDataset(),
            'importModelVersion' => $this->importModelVersion(),
            'listDataIngestionJobs' => $this->listDataIngestionJobs(),
            'listDatasets' => $this->listDatasets(),
            'listInferenceEvents' => $this->listInferenceEvents(),
            'listInferenceExecutions' => $this->listInferenceExecutions(),
            'listInferenceSchedulers' => $this->listInferenceSchedulers(),
            'listLabelGroups' => $this->listLabelGroups(),
            'listLabels' => $this->listLabels(),
            'listModelVersions' => $this->listModelVersions(),
            'listModels' => $this->listModels(),
            'listRetrainingSchedulers' => $this->listRetrainingSchedulers(),
            'listSensorStatistics' => $this->listSensorStatistics(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'startDataIngestionJob' => $this->startDataIngestionJob(),
            'startInferenceScheduler' => $this->startInferenceScheduler(),
            'startRetrainingScheduler' => $this->startRetrainingScheduler(),
            'stopInferenceScheduler' => $this->stopInferenceScheduler(),
            'stopRetrainingScheduler' => $this->stopRetrainingScheduler(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateActiveModelVersion' => $this->updateActiveModelVersion(),
            'updateInferenceScheduler' => $this->updateInferenceScheduler(),
            'updateLabelGroup' => $this->updateLabelGroup(),
            'updateModel' => $this->updateModel(),
            'updateRetrainingScheduler' => $this->updateRetrainingScheduler(),
        };
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INGESTION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                ]),
            ]),
        ]);
    }
    private function createInferenceScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerName'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelQuality'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY_THRESHOLD_MET'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANNOT_DETERMINE_QUALITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('POOR_QUALITY_DETECTED'),
                ]),
            ]),
        ]);
    }
    private function createLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LabelId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLabelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LabelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelGroupArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                ]),
            ]),
        ]);
    }
    private function createRetrainingScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteInferenceScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLabelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRetrainingScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeDataIngestionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestionInputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedReason'),
                new \PHPStan\Type\Constant\ConstantStringType('DataQualitySummary'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestedFilesSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestedDataSize'),
                new \PHPStan\Type\Constant\ConstantStringType('DataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceDatasetArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3InputConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientSensorData'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingSensorData'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSensorData'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnsupportedTimestamps'),
                    new \PHPStan\Type\Constant\ConstantStringType('DuplicateTimestamps'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MissingCompleteSensorData'),
                        new \PHPStan\Type\Constant\ConstantStringType('SensorsWithShortDateRange'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfMissingValues'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfInvalidValues'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfUnsupportedTimestamps'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfDuplicateTimestamps'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestedNumberOfFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscardedFiles'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideKmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestionInputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('DataQualitySummary'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestedFilesSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceDatasetArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INGESTION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3InputConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientSensorData'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingSensorData'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidSensorData'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnsupportedTimestamps'),
                    new \PHPStan\Type\Constant\ConstantStringType('DuplicateTimestamps'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MissingCompleteSensorData'),
                        new \PHPStan\Type\Constant\ConstantStringType('SensorsWithShortDateRange'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfMissingValues'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AffectedSensorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfInvalidValues'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfUnsupportedTimestamps'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfDuplicateTimestamps'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestedNumberOfFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscardedFiles'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInferenceScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerName'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('DataDelayOffsetInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('DataUploadFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataInputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('DataOutputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideKmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestInferenceResult'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PT5M'),
                    new \PHPStan\Type\Constant\ConstantStringType('PT10M'),
                    new \PHPStan\Type\Constant\ConstantStringType('PT15M'),
                    new \PHPStan\Type\Constant\ConstantStringType('PT30M'),
                    new \PHPStan\Type\Constant\ConstantStringType('PT1H'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3InputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputTimeZoneOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('InferenceInputNameConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimestampFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentTimestampDelimiter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3OutputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ANOMALOUS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                ]),
            ]),
        ]);
    }
    private function describeLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LabelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelId'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Rating'),
                new \PHPStan\Type\Constant\ConstantStringType('FaultCode'),
                new \PHPStan\Type\Constant\ConstantStringType('Notes'),
                new \PHPStan\Type\Constant\ConstantStringType('Equipment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ANOMALY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NO_ANOMALY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLabelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LabelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FaultCodes'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelsInputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingDataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingDataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationDataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationDataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DataPreProcessingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingExecutionStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingExecutionEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedReason'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideKmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('OffCondition'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceModelVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ActiveModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('ActiveModelVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersionActivatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('PreviousActiveModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PreviousActiveModelVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PreviousModelVersionActivatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('PriorModelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingFailedReason'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingAvailableDataInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('NextScheduledRetrainingStartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('AccumulatedInferenceDataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AccumulatedInferenceDataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrainingSchedulerStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelDiagnosticsOutputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelQuality'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3InputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LabelGroupName'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetSamplingRate'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PT1S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT5S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT10S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT15S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT30S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT1M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT5M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT10M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT15M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT30M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT1H'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3OutputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY_THRESHOLD_MET'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANNOT_DETERMINE_QUALITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('POOR_QUALITY_DETECTED'),
                ]),
            ]),
        ]);
    }
    private function describeModelVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelsInputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingDataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingDataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationDataStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationDataEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DataPreProcessingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingExecutionStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingExecutionEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedReason'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideKmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('OffCondition'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceModelVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportedDataSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('PriorModelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrainingAvailableDataInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoPromotionResult'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoPromotionResultReason'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelDiagnosticsOutputConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelDiagnosticsResultsObject'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelQuality'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRAINING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3InputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LabelGroupName'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetSamplingRate'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PT1S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT5S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT10S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT15S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT30S'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT1M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT5M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT10M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT15M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT30M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT1H'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MODEL_PROMOTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODEL_NOT_PROMOTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRAINING_INTERNAL_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRAINING_CUSTOMER_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRAINING_CANCELLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3OutputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY_THRESHOLD_MET'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANNOT_DETERMINE_QUALITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('POOR_QUALITY_DETECTED'),
                ]),
            ]),
        ]);
    }
    private function describeResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyRevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeRetrainingScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrainingStartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrainingFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('LookbackWindow'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('PromoteMode'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function importDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INGESTION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importModelVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
            ]),
        ]);
    }
    private function listDataIngestionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DataIngestionJobSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestionInputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3InputConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INGESTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listInferenceEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceEventSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Diagnostics'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventDurationInSeconds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listInferenceExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceExecutionSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataInputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataOutputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerResultObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3InputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputTimeZoneOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('InferenceInputNameConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimestampFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComponentTimestampDelimiter'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3OutputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listInferenceSchedulers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataDelayOffsetInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataUploadFrequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestInferenceResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PT5M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT10M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT15M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT30M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT1H'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANOMALOUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listLabelGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelGroupSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LabelGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LabelGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('LabelSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LabelGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LabelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LabelGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rating'),
                    new \PHPStan\Type\Constant\ConstantStringType('FaultCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Equipment'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANOMALY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_ANOMALY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listModelVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersionSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelQuality'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUALITY_THRESHOLD_MET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANNOT_DETERMINE_QUALITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('POOR_QUALITY_DETECTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveModelVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestScheduledRetrainingStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextScheduledRetrainingStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrainingSchedulerStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelDiagnosticsOutputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelQuality'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3OutputConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUALITY_THRESHOLD_MET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANNOT_DETERMINE_QUALITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('POOR_QUALITY_DETECTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listRetrainingSchedulers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RetrainingSchedulerSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrainingStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrainingFrequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('LookbackWindow'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSensorStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SensorStatisticsSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComponentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SensorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataExists'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidDateEntries'),
                    new \PHPStan\Type\Constant\ConstantStringType('DuplicateTimestamps'),
                    new \PHPStan\Type\Constant\ConstantStringType('CategoricalValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultipleOperatingModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('LargeTimestampGaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonotonicValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataEndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percentage'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfCategory'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POTENTIAL_ISSUE_DETECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ISSUE_DETECTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POTENTIAL_ISSUE_DETECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ISSUE_DETECTED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfLargeTimestampGaps'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxTimestampGapInDays'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POTENTIAL_ISSUE_DETECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ISSUE_DETECTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Monotonicity'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POTENTIAL_ISSUE_DETECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ISSUE_DETECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DECREASING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCREASING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyRevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDataIngestionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                ]),
            ]),
        ]);
    }
    private function startInferenceScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerName'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function startRetrainingScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopInferenceScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerName'),
                new \PHPStan\Type\Constant\ConstantStringType('InferenceSchedulerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopRetrainingScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
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
    private function updateActiveModelVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentActiveVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PreviousActiveVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentActiveVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PreviousActiveVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateInferenceScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateLabelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRetrainingScheduler(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}