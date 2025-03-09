<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LookoutforVisionClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LookoutforVision\LookoutforVisionClient>
     */
    public function getClass(): string
    {
        return \Aws\LookoutforVision\LookoutforVisionClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createDataset',
            'createModel',
            'createProject',
            'deleteDataset',
            'deleteModel',
            'deleteProject',
            'describeDataset',
            'describeModel',
            'describeModelPackagingJob',
            'describeProject',
            'detectAnomalies',
            'listDatasetEntries',
            'listModelPackagingJobs',
            'listModels',
            'listProjects',
            'listTagsForResource',
            'startModel',
            'startModelPackagingJob',
            'stopModel',
            'tagResource',
            'untagResource',
            'updateDatasetEntries',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createDataset' => $this->createDataset(),
            'createModel' => $this->createModel(),
            'createProject' => $this->createProject(),
            'deleteDataset' => $this->deleteDataset(),
            'deleteModel' => $this->deleteModel(),
            'deleteProject' => $this->deleteProject(),
            'describeDataset' => $this->describeDataset(),
            'describeModel' => $this->describeModel(),
            'describeModelPackagingJob' => $this->describeModelPackagingJob(),
            'describeProject' => $this->describeProject(),
            'detectAnomalies' => $this->detectAnomalies(),
            'listDatasetEntries' => $this->listDatasetEntries(),
            'listModelPackagingJobs' => $this->listModelPackagingJobs(),
            'listModels' => $this->listModels(),
            'listProjects' => $this->listProjects(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startModel' => $this->startModel(),
            'startModelPackagingJob' => $this->startModelPackagingJob(),
            'stopModel' => $this->stopModel(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDatasetEntries' => $this->updateDatasetEntries(),
        };
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Performance'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING_HOSTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOSTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOSTING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING_HOSTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                        new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageStats'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        new \PHPStan\Type\Constant\ConstantStringType('Labeled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Anomaly'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Performance'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationManifest'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationEndTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinInferenceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxInferenceUnits'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING_HOSTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOSTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOSTING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING_HOSTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                        new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeModelPackagingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingJobDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingOutputDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Greengrass'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CompilerOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetDevice'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetPlatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3OutputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComponentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComponentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComponentDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('jetson_xavier'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Os'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Accelerator'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                                    new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('NVIDIA'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Greengrass'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ComponentVersionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComponentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComponentVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProjectDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Datasets'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function detectAnomalies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DetectAnomalyResult'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsAnomalous'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Anomalies'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyMask'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('PixelAnomaly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TotalPercentageArea'),
                                new \PHPStan\Type\Constant\ConstantStringType('Color'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listDatasetEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listModelPackagingJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingJobDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelPackagingMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Models'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Performance'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRAINING_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING_HOSTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOSTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOSTING_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING_HOSTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Projects'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function startModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING_HOSTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('HOSTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('HOSTING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING_HOSTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_UPDATING'),
                ]),
            ]),
        ]);
    }
    private function startModelPackagingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING_HOSTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('HOSTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('HOSTING_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING_HOSTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_UPDATING'),
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
    private function updateDatasetEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_ROLLBACK_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
}