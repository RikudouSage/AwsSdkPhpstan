<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudWatchClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudWatch\CloudWatchClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudWatch\CloudWatchClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteAlarms',
            'deleteAnomalyDetector',
            'deleteDashboards',
            'deleteInsightRules',
            'deleteMetricStream',
            'describeAlarmHistory',
            'describeAlarms',
            'describeAlarmsForMetric',
            'describeAnomalyDetectors',
            'describeInsightRules',
            'disableAlarmActions',
            'disableInsightRules',
            'enableAlarmActions',
            'enableInsightRules',
            'getDashboard',
            'getInsightRuleReport',
            'getMetricData',
            'getMetricStatistics',
            'getMetricStream',
            'getMetricWidgetImage',
            'listDashboards',
            'listManagedInsightRules',
            'listMetricStreams',
            'listMetrics',
            'listTagsForResource',
            'putAnomalyDetector',
            'putCompositeAlarm',
            'putDashboard',
            'putInsightRule',
            'putManagedInsightRules',
            'putMetricAlarm',
            'putMetricData',
            'putMetricStream',
            'setAlarmState',
            'startMetricStreams',
            'stopMetricStreams',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteAlarms' => $this->deleteAlarms(),
            'deleteAnomalyDetector' => $this->deleteAnomalyDetector(),
            'deleteDashboards' => $this->deleteDashboards(),
            'deleteInsightRules' => $this->deleteInsightRules(),
            'deleteMetricStream' => $this->deleteMetricStream(),
            'describeAlarmHistory' => $this->describeAlarmHistory(),
            'describeAlarms' => $this->describeAlarms(),
            'describeAlarmsForMetric' => $this->describeAlarmsForMetric(),
            'describeAnomalyDetectors' => $this->describeAnomalyDetectors(),
            'describeInsightRules' => $this->describeInsightRules(),
            'disableAlarmActions' => $this->disableAlarmActions(),
            'disableInsightRules' => $this->disableInsightRules(),
            'enableAlarmActions' => $this->enableAlarmActions(),
            'enableInsightRules' => $this->enableInsightRules(),
            'getDashboard' => $this->getDashboard(),
            'getInsightRuleReport' => $this->getInsightRuleReport(),
            'getMetricData' => $this->getMetricData(),
            'getMetricStatistics' => $this->getMetricStatistics(),
            'getMetricStream' => $this->getMetricStream(),
            'getMetricWidgetImage' => $this->getMetricWidgetImage(),
            'listDashboards' => $this->listDashboards(),
            'listManagedInsightRules' => $this->listManagedInsightRules(),
            'listMetricStreams' => $this->listMetricStreams(),
            'listMetrics' => $this->listMetrics(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putAnomalyDetector' => $this->putAnomalyDetector(),
            'putCompositeAlarm' => $this->putCompositeAlarm(),
            'putDashboard' => $this->putDashboard(),
            'putInsightRule' => $this->putInsightRule(),
            'putManagedInsightRules' => $this->putManagedInsightRules(),
            'putMetricAlarm' => $this->putMetricAlarm(),
            'putMetricData' => $this->putMetricData(),
            'putMetricStream' => $this->putMetricStream(),
            'setAlarmState' => $this->setAlarmState(),
            'startMetricStreams' => $this->startMetricStreams(),
            'stopMetricStreams' => $this->stopMetricStreams(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function deleteAlarms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDashboards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInsightRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExceptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
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
    private function deleteMetricStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAlarmHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AlarmHistoryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('HistoryItemType'),
                        new \PHPStan\Type\Constant\ConstantStringType('HistorySummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('HistoryData'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CompositeAlarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricAlarm'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationUpdate'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateUpdate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAlarms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CompositeAlarms'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricAlarms'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmConfigurationUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmRule'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('OKActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReasonData'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateTransitionedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsSuppressedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsSuppressedReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsSuppressor'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsSuppressorWaitPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsSuppressorExtensionPeriod'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WaitPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExtensionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarm'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmConfigurationUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('OKActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReasonData'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendedStatistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatapointsToAlarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('TreatMissingData'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluateLowSampleCountPercentile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThresholdMetricId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateTransitionedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
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
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualToThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualToThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanLowerOrGreaterThanUpperThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanLowerThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanUpperThreshold'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_DATA'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAlarmsForMetric(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricAlarms'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmConfigurationUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('OKActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReasonData'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateUpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendedStatistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatapointsToAlarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('TreatMissingData'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluateLowSampleCountPercentile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThresholdMetricId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateTransitionedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
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
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualToThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualToThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanLowerOrGreaterThanUpperThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanLowerThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanUpperThreshold'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_DATA'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeAnomalyDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetectors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricCharacteristics'),
                        new \PHPStan\Type\Constant\ConstantStringType('SingleMetricAnomalyDetector'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricMathAnomalyDetector'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludedTimeRanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricTimezone'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                                ], [
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TRAINING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRAINED_INSUFFICIENT_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PeriodicSpikes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInsightRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('InsightRules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedRule'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function disableAlarmActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disableInsightRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExceptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
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
    private function enableAlarmActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableInsightRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExceptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
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
    private function getDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DashboardArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DashboardBody'),
                new \PHPStan\Type\Constant\ConstantStringType('DashboardName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInsightRuleReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyLabels'),
                new \PHPStan\Type\Constant\ConstantStringType('AggregationStatistic'),
                new \PHPStan\Type\Constant\ConstantStringType('AggregateValue'),
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateUniqueCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Contributors'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricDatapoints'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateAggregateValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Datapoints'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApproximateValue'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('UniqueContributors'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxContributorValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMetricData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricDataResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Messages'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamps'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Messages'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('PartialData'),
                            new \PHPStan\Type\Constant\ConstantStringType('Forbidden'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMetricStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                new \PHPStan\Type\Constant\ConstantStringType('Datapoints'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendedStatistics'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\FloatType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMetricStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('IncludeFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludeFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('FirehoseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('StatisticsConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('IncludeLinkedAccountsMetrics'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('json'),
                    new \PHPStan\Type\Constant\ConstantStringType('opentelemetry0.7'),
                    new \PHPStan\Type\Constant\ConstantStringType('opentelemetry1.0'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalStatistics'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getMetricWidgetImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricWidgetImage'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function listDashboards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DashboardEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DashboardName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DashboardArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedInsightRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedRules'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMetricStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirehoseArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputFormat'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                            new \PHPStan\Type\Constant\ConstantStringType('opentelemetry0.7'),
                            new \PHPStan\Type\Constant\ConstantStringType('opentelemetry1.0'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('OwningAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
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
    private function putAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putCompositeAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DashboardValidationMessages'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putInsightRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putManagedInsightRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExceptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
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
    private function putMetricAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putMetricData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putMetricStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setAlarmState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startMetricStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopMetricStreams(): ?\PHPStan\Type\Type
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
}