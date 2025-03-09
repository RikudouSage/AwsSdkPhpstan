<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DevOpsGuruClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DevOpsGuru\DevOpsGuruClient>
     */
    public function getClass(): string
    {
        return \Aws\DevOpsGuru\DevOpsGuruClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addNotificationChannel',
            'deleteInsight',
            'describeAccountHealth',
            'describeAccountOverview',
            'describeAnomaly',
            'describeEventSourcesConfig',
            'describeFeedback',
            'describeInsight',
            'describeOrganizationHealth',
            'describeOrganizationOverview',
            'describeOrganizationResourceCollectionHealth',
            'describeResourceCollectionHealth',
            'describeServiceIntegration',
            'getCostEstimation',
            'getResourceCollection',
            'listAnomaliesForInsight',
            'listAnomalousLogGroups',
            'listEvents',
            'listInsights',
            'listMonitoredResources',
            'listNotificationChannels',
            'listOrganizationInsights',
            'listRecommendations',
            'putFeedback',
            'removeNotificationChannel',
            'searchInsights',
            'searchOrganizationInsights',
            'startCostEstimation',
            'updateEventSourcesConfig',
            'updateResourceCollection',
            'updateServiceIntegration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addNotificationChannel' => $this->addNotificationChannel(),
            'deleteInsight' => $this->deleteInsight(),
            'describeAccountHealth' => $this->describeAccountHealth(),
            'describeAccountOverview' => $this->describeAccountOverview(),
            'describeAnomaly' => $this->describeAnomaly(),
            'describeEventSourcesConfig' => $this->describeEventSourcesConfig(),
            'describeFeedback' => $this->describeFeedback(),
            'describeInsight' => $this->describeInsight(),
            'describeOrganizationHealth' => $this->describeOrganizationHealth(),
            'describeOrganizationOverview' => $this->describeOrganizationOverview(),
            'describeOrganizationResourceCollectionHealth' => $this->describeOrganizationResourceCollectionHealth(),
            'describeResourceCollectionHealth' => $this->describeResourceCollectionHealth(),
            'describeServiceIntegration' => $this->describeServiceIntegration(),
            'getCostEstimation' => $this->getCostEstimation(),
            'getResourceCollection' => $this->getResourceCollection(),
            'listAnomaliesForInsight' => $this->listAnomaliesForInsight(),
            'listAnomalousLogGroups' => $this->listAnomalousLogGroups(),
            'listEvents' => $this->listEvents(),
            'listInsights' => $this->listInsights(),
            'listMonitoredResources' => $this->listMonitoredResources(),
            'listNotificationChannels' => $this->listNotificationChannels(),
            'listOrganizationInsights' => $this->listOrganizationInsights(),
            'listRecommendations' => $this->listRecommendations(),
            'putFeedback' => $this->putFeedback(),
            'removeNotificationChannel' => $this->removeNotificationChannel(),
            'searchInsights' => $this->searchInsights(),
            'searchOrganizationInsights' => $this->searchOrganizationInsights(),
            'startCostEstimation' => $this->startCostEstimation(),
            'updateEventSourcesConfig' => $this->updateEventSourcesConfig(),
            'updateResourceCollection' => $this->updateResourceCollection(),
            'updateServiceIntegration' => $this->updateServiceIntegration(),
        };
    }
    private function addNotificationChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteInsight(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAccountHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricsAnalyzed'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceHours'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyzedResourceCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeAccountOverview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('MeanTimeToRecoverInMilliseconds'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeAnomaly(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveAnomaly'),
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveAnomaly'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyReportedTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('PredictionTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedInsightId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                    new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OpenTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloseTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsMetrics'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricDataSummary'),
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
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('p99'),
                                    new \PHPStan\Type\Constant\ConstantStringType('p90'),
                                    new \PHPStan\Type\Constant\ConstantStringType('p50'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TimestampMetricValuePairList'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricValue'),
                                        ], [
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PartialData'),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricDisplayName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReferenceData'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatsAtAnomaly'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatsAtBaseline'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonValues'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceScalar'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceMetric'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\IntegerType(),
                                                    ]),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceResourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceResourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyReportedTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedInsightId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CausalAnomalyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyResources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OpenTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloseTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsMetrics'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricDataSummary'),
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
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('p99'),
                                    new \PHPStan\Type\Constant\ConstantStringType('p90'),
                                    new \PHPStan\Type\Constant\ConstantStringType('p50'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TimestampMetricValuePairList'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricValue'),
                                        ], [
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PartialData'),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricDisplayName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReferenceData'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatsAtAnomaly'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatsAtBaseline'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonValues'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceScalar'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceMetric'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\IntegerType(),
                                                    ]),
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAUSAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTEXTUAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeEventSourcesConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSources'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AmazonCodeGuruProfiler'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InsightFeedback'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Feedback'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALID_COLLECTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECOMMENDATION_USEFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALERT_TOO_SENSITIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_NOISY_ANOMALY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_INCORRECT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeInsight(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveInsight'),
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveInsight'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('PredictionTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SsmOpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SsmOpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeOrganizationHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricsAnalyzed'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceHours'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeOrganizationOverview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveInsights'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeOrganizationResourceCollectionHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('Account'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insight'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalyzedResourceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeanTimeToRecoverInMilliseconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insight'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalyzedResourceCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insight'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insight'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalyzedResourceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeanTimeToRecoverInMilliseconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeResourceCollectionHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insight'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalyzedResourceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeanTimeToRecoverInMilliseconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insight'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalyzedResourceCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insight'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalyzedResourceCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenProactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenReactiveInsights'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeanTimeToRecoverInMilliseconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeServiceIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceIntegration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OpsCenter'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogsAnomalyDetection'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSServerSideEncryption'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptInStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptInStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptInStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCostEstimation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Costs'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeRange'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalCost'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnitCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cost'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourceCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnomaliesForInsight(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveAnomalies'),
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveAnomalies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyReportedTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedInsightId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloseTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsMetrics'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricDataSummary'),
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
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('p99'),
                                        new \PHPStan\Type\Constant\ConstantStringType('p90'),
                                        new \PHPStan\Type\Constant\ConstantStringType('p50'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TimestampMetricValuePairList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MetricValue'),
                                            ], [
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PartialData'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricDisplayName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReferenceData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatsAtAnomaly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatsAtBaseline'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonValues'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ReferenceScalar'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ReferenceMetric'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\FloatType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                                new \PHPStan\Type\StringType(),
                                                            ])),
                                                            new \PHPStan\Type\IntegerType(),
                                                        ]),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceResourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceResourceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyReportedTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedInsightId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('CausalAnomalyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloseTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsMetrics'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricDataSummary'),
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
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('p99'),
                                        new \PHPStan\Type\Constant\ConstantStringType('p90'),
                                        new \PHPStan\Type\Constant\ConstantStringType('p50'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TimestampMetricValuePairList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MetricValue'),
                                            ], [
                                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                                new \PHPStan\Type\FloatType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                                            new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PartialData'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricDisplayName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReferenceData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatsAtAnomaly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatsAtBaseline'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonValues'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ReferenceScalar'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ReferenceMetric'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\FloatType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('MetricQuery'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                                new \PHPStan\Type\StringType(),
                                                            ])),
                                                            new \PHPStan\Type\IntegerType(),
                                                        ]),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CAUSAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTEXTUAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
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
    private function listAnomalousLogGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InsightId'),
                new \PHPStan\Type\Constant\ConstantStringType('AnomalousLogGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImpactStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImpactEndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfLogLinesScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogAnomalyShowcases'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogAnomalyClasses'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogAnomalyType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogAnomalyToken'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogEventId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Explanation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfLogLinesOccurrences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogEventTimestamp'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('KEYWORD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEYWORD_TOKEN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FORMAT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_CODE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK_FORMAT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NUMERICAL_POINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NUMERICAL_NAN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NEW_FIELD_NAME'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Events'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_CLOUD_TRAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_CODE_DEPLOY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFRASTRUCTURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_CHANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIG_CHANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCHEMA_CHANGE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            ], [
                                new \PHPStan\Type\StringType(),
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
    private function listInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMonitoredResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitoredResourceIdentifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MonitoredResourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePermission'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_PERMISSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_PERMISSION'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNotificationChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Channels'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sns'),
                            new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Severities'),
                                new \PHPStan\Type\Constant\ConstantStringType('MessageTypes'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NEW_INSIGHT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED_INSIGHT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NEW_ASSOCIATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SEVERITY_UPGRADED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NEW_RECOMMENDATION'),
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
    private function listOrganizationInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Link'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedAnomalies'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('AnomalyId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetrics'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeNotificationChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function searchInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchOrganizationInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('ReactiveInsights'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsightTimeRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCollection'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceArns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONGOING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StackNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppBoundaryKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceNames'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMO_DB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_BEANSTALK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELASTI_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KINESIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAT_GATEWAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ELB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGE_MAKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SWF'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startCostEstimation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEventSourcesConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResourceCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateServiceIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}