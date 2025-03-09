<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MachineLearningClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MachineLearning\MachineLearningClient>
     */
    public function getClass(): string
    {
        return \Aws\MachineLearning\MachineLearningClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTags',
            'createBatchPrediction',
            'createDataSourceFromRDS',
            'createDataSourceFromRedshift',
            'createDataSourceFromS3',
            'createEvaluation',
            'createMLModel',
            'createRealtimeEndpoint',
            'deleteBatchPrediction',
            'deleteDataSource',
            'deleteEvaluation',
            'deleteMLModel',
            'deleteRealtimeEndpoint',
            'deleteTags',
            'describeBatchPredictions',
            'describeDataSources',
            'describeEvaluations',
            'describeMLModels',
            'describeTags',
            'getBatchPrediction',
            'getDataSource',
            'getEvaluation',
            'getMLModel',
            'predict',
            'updateBatchPrediction',
            'updateDataSource',
            'updateEvaluation',
            'updateMLModel',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTags' => $this->addTags(),
            'createBatchPrediction' => $this->createBatchPrediction(),
            'createDataSourceFromRDS' => $this->createDataSourceFromRDS(),
            'createDataSourceFromRedshift' => $this->createDataSourceFromRedshift(),
            'createDataSourceFromS3' => $this->createDataSourceFromS3(),
            'createEvaluation' => $this->createEvaluation(),
            'createMLModel' => $this->createMLModel(),
            'createRealtimeEndpoint' => $this->createRealtimeEndpoint(),
            'deleteBatchPrediction' => $this->deleteBatchPrediction(),
            'deleteDataSource' => $this->deleteDataSource(),
            'deleteEvaluation' => $this->deleteEvaluation(),
            'deleteMLModel' => $this->deleteMLModel(),
            'deleteRealtimeEndpoint' => $this->deleteRealtimeEndpoint(),
            'deleteTags' => $this->deleteTags(),
            'describeBatchPredictions' => $this->describeBatchPredictions(),
            'describeDataSources' => $this->describeDataSources(),
            'describeEvaluations' => $this->describeEvaluations(),
            'describeMLModels' => $this->describeMLModels(),
            'describeTags' => $this->describeTags(),
            'getBatchPrediction' => $this->getBatchPrediction(),
            'getDataSource' => $this->getDataSource(),
            'getEvaluation' => $this->getEvaluation(),
            'getMLModel' => $this->getMLModel(),
            'predict' => $this->predict(),
            'updateBatchPrediction' => $this->updateBatchPrediction(),
            'updateDataSource' => $this->updateDataSource(),
            'updateEvaluation' => $this->updateEvaluation(),
            'updateMLModel' => $this->updateMLModel(),
        };
    }
    private function addTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BatchPrediction'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Evaluation'),
                    new \PHPStan\Type\Constant\ConstantStringType('MLModel'),
                ]),
            ]),
        ]);
    }
    private function createBatchPrediction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BatchPredictionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataSourceFromRDS(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataSourceFromRedshift(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataSourceFromS3(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMLModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRealtimeEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('RealtimeEndpointInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PeakRequestsPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteBatchPrediction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BatchPredictionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteMLModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRealtimeEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('RealtimeEndpointInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PeakRequestsPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BatchPrediction'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Evaluation'),
                    new \PHPStan\Type\Constant\ConstantStringType('MLModel'),
                ]),
            ]),
        ]);
    }
    private function describeBatchPredictions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BatchPredictionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchPredictionDataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataLocationS3'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalRecordCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRecordCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDataSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataLocationS3'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataRearrangement'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedshiftMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDSMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputeStatistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RedshiftDatabase'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseUserName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SelectSqlQuery'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Database'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseUserName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SelectSqlQuery'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataPipelineId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEvaluations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationDataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataLocationS3'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PerformanceMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMLModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrainingDataSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrainingParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataLocationS3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('MLModelType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScoreThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScoreThresholdLastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PeakRequestsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('sgd'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTICLASS'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BatchPrediction'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Evaluation'),
                    new \PHPStan\Type\Constant\ConstantStringType('MLModel'),
                ]),
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
    private function getBatchPrediction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BatchPredictionId'),
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('BatchPredictionDataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('InputDataLocationS3'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputUri'),
                new \PHPStan\Type\Constant\ConstantStringType('LogUri'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalRecordCount'),
                new \PHPStan\Type\Constant\ConstantStringType('InvalidRecordCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('DataLocationS3'),
                new \PHPStan\Type\Constant\ConstantStringType('DataRearrangement'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfFiles'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LogUri'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('RedshiftMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('RDSMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ComputeStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceSchema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftDatabase'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectSqlQuery'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Database'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectSqlQuery'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataPipelineId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
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
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationDataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('InputDataLocationS3'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('PerformanceMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('LogUri'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getMLModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingDataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByIamUser'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('SizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('InputDataLocationS3'),
                new \PHPStan\Type\Constant\ConstantStringType('MLModelType'),
                new \PHPStan\Type\Constant\ConstantStringType('ScoreThreshold'),
                new \PHPStan\Type\Constant\ConstantStringType('ScoreThresholdLastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LogUri'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('ComputeTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FinishedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Recipe'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INPROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PeakRequestsPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REGRESSION'),
                    new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTICLASS'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function predict(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Prediction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('predictedLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('predictedValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('predictedScores'),
                    new \PHPStan\Type\Constant\ConstantStringType('details'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PredictiveModelType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateBatchPrediction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BatchPredictionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMLModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MLModelId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}