<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LookoutMetricsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LookoutMetrics\LookoutMetricsClient>
     */
    public function getClass(): string
    {
        return \Aws\LookoutMetrics\LookoutMetricsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'activateAnomalyDetector',
            'backTestAnomalyDetector',
            'createAlert',
            'createAnomalyDetector',
            'createMetricSet',
            'deactivateAnomalyDetector',
            'deleteAlert',
            'deleteAnomalyDetector',
            'describeAlert',
            'describeAnomalyDetectionExecutions',
            'describeAnomalyDetector',
            'describeMetricSet',
            'detectMetricSetConfig',
            'getAnomalyGroup',
            'getDataQualityMetrics',
            'getFeedback',
            'getSampleData',
            'listAlerts',
            'listAnomalyDetectors',
            'listAnomalyGroupRelatedMetrics',
            'listAnomalyGroupSummaries',
            'listAnomalyGroupTimeSeries',
            'listMetricSets',
            'listTagsForResource',
            'putFeedback',
            'tagResource',
            'untagResource',
            'updateAlert',
            'updateAnomalyDetector',
            'updateMetricSet',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'activateAnomalyDetector' => $this->activateAnomalyDetector(),
            'backTestAnomalyDetector' => $this->backTestAnomalyDetector(),
            'createAlert' => $this->createAlert(),
            'createAnomalyDetector' => $this->createAnomalyDetector(),
            'createMetricSet' => $this->createMetricSet(),
            'deactivateAnomalyDetector' => $this->deactivateAnomalyDetector(),
            'deleteAlert' => $this->deleteAlert(),
            'deleteAnomalyDetector' => $this->deleteAnomalyDetector(),
            'describeAlert' => $this->describeAlert(),
            'describeAnomalyDetectionExecutions' => $this->describeAnomalyDetectionExecutions(),
            'describeAnomalyDetector' => $this->describeAnomalyDetector(),
            'describeMetricSet' => $this->describeMetricSet(),
            'detectMetricSetConfig' => $this->detectMetricSetConfig(),
            'getAnomalyGroup' => $this->getAnomalyGroup(),
            'getDataQualityMetrics' => $this->getDataQualityMetrics(),
            'getFeedback' => $this->getFeedback(),
            'getSampleData' => $this->getSampleData(),
            'listAlerts' => $this->listAlerts(),
            'listAnomalyDetectors' => $this->listAnomalyDetectors(),
            'listAnomalyGroupRelatedMetrics' => $this->listAnomalyGroupRelatedMetrics(),
            'listAnomalyGroupSummaries' => $this->listAnomalyGroupSummaries(),
            'listAnomalyGroupTimeSeries' => $this->listAnomalyGroupTimeSeries(),
            'listMetricSets' => $this->listMetricSets(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putFeedback' => $this->putFeedback(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAlert' => $this->updateAlert(),
            'updateAnomalyDetector' => $this->updateAnomalyDetector(),
            'updateMetricSet' => $this->updateMetricSet(),
        };
    }
    private function activateAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function backTestAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAlert(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AlertArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMetricSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricSetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deactivateAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAlert(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAlert(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Alert'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertSensitivityThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertFilters'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SNSConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnsFormat'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LONG_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHORT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricList'),
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionFilterList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionValueList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeAnomalyDetectionExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_SCHEDULE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorName'),
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorFrequency'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('P1D'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT1H'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT10M'),
                        new \PHPStan\Type\Constant\ConstantStringType('PT5M'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LEARNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACK_TEST_ACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACK_TEST_ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACK_TEST_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATION_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACK_TEST_ACTIVATION_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATION_FAILURE'),
                ]),
            ]),
        ]);
    }
    private function describeMetricSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricSetDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricList'),
                new \PHPStan\Type\Constant\ConstantStringType('TimestampColumn'),
                new \PHPStan\Type\Constant\ConstantStringType('DimensionList'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricSetFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricSource'),
                new \PHPStan\Type\Constant\ConstantStringType('DimensionFilterList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AggregationFunction'),
                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnFormat'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('P1D'),
                    new \PHPStan\Type\Constant\ConstantStringType('PT1H'),
                    new \PHPStan\Type\Constant\ConstantStringType('PT10M'),
                    new \PHPStan\Type\Constant\ConstantStringType('PT5M'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3SourceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppFlowConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RDSSourceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftSourceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AthenaSourceConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplatedPathList'),
                        new \PHPStan\Type\Constant\ConstantStringType('HistoricalDataPathList'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileFormatDescriptor'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CsvFormatDescriptor'),
                            new \PHPStan\Type\Constant\ConstantStringType('JsonFormatDescriptor'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FileCompression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Charset'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContainsHeader'),
                                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                new \PHPStan\Type\Constant\ConstantStringType('HeaderList'),
                                new \PHPStan\Type\Constant\ConstantStringType('QuoteSymbol'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FileCompression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Charset'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlowName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackTestConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RunBackTestMode'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseHost'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabasePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretManagerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdList'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseHost'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabasePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretManagerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdList'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataCatalog'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3ResultsPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackTestConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RunBackTestMode'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilterList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterOperation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function detectMetricSetConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DetectedMetricSetConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricSetFrequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3SourceConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FileFormatDescriptor'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CsvFormatDescriptor'),
                                new \PHPStan\Type\Constant\ConstantStringType('JsonFormatDescriptor'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FileCompression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Charset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContainsHeader'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HeaderList'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QuoteSymbol'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FileCompression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Charset'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAnomalyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryMetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricLevelImpactList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumTimeSeries'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContributionMatrix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionContributionList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionValueContributionList'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContributionScore'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDataQualityMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorDataQualityMetricList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricSetDataQualityMetricList'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricSetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataQualityMetricList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('RelatedColumnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COLUMN_COMPLETENESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIMENSION_UNIQUENESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_SERIES_COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROWS_PROCESSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROWS_PARTIAL_COMPLIANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_ROWS_COMPLIANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BACKTEST_TRAINING_DATA_START_TIME_STAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('BACKTEST_TRAINING_DATA_END_TIME_STAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('BACKTEST_INFERENCE_DATA_START_TIME_STAMP'),
                                new \PHPStan\Type\Constant\ConstantStringType('BACKTEST_INFERENCE_DATA_END_TIME_STAMP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupTimeSeriesFeedback'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsAnomaly'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSampleData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HeaderValues'),
                new \PHPStan\Type\Constant\ConstantStringType('SampleRows'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAlerts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AlertSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AlertArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertSensitivityThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnomalyDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACK_TEST_ACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACK_TEST_ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACK_TEST_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnomalyGroupRelatedMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InterMetricImpactList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContributionPercentage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAUSE_OF_INPUT_ANOMALY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFFECT_OF_INPUT_ANOMALY_GROUP'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnomalyGroupSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryMetricName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ItemizedMetricStatsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OccurrenceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnomalyGroupTimeSeries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                new \PHPStan\Type\Constant\ConstantStringType('TimestampList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DimensionList'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricValueList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function listMetricSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricSetSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MetricSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricSetDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putFeedback(): ?\PHPStan\Type\Type
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
    private function updateAlert(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AlertArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMetricSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricSetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}