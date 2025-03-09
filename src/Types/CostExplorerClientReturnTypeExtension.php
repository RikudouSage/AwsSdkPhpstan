<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CostExplorerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CostExplorer\CostExplorerClient>
     */
    public function getClass(): string
    {
        return \Aws\CostExplorer\CostExplorerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAnomalyMonitor',
            'createAnomalySubscription',
            'createCostCategoryDefinition',
            'deleteAnomalyMonitor',
            'deleteAnomalySubscription',
            'deleteCostCategoryDefinition',
            'describeCostCategoryDefinition',
            'getAnomalies',
            'getAnomalyMonitors',
            'getAnomalySubscriptions',
            'getApproximateUsageRecords',
            'getCommitmentPurchaseAnalysis',
            'getCostAndUsage',
            'getCostAndUsageWithResources',
            'getCostCategories',
            'getCostForecast',
            'getDimensionValues',
            'getReservationCoverage',
            'getReservationPurchaseRecommendation',
            'getReservationUtilization',
            'getRightsizingRecommendation',
            'getSavingsPlanPurchaseRecommendationDetails',
            'getSavingsPlansCoverage',
            'getSavingsPlansPurchaseRecommendation',
            'getSavingsPlansUtilization',
            'getSavingsPlansUtilizationDetails',
            'getTags',
            'getUsageForecast',
            'listCommitmentPurchaseAnalyses',
            'listCostAllocationTagBackfillHistory',
            'listCostAllocationTags',
            'listCostCategoryDefinitions',
            'listSavingsPlansPurchaseRecommendationGeneration',
            'listTagsForResource',
            'provideAnomalyFeedback',
            'startCommitmentPurchaseAnalysis',
            'startCostAllocationTagBackfill',
            'startSavingsPlansPurchaseRecommendationGeneration',
            'tagResource',
            'untagResource',
            'updateAnomalyMonitor',
            'updateAnomalySubscription',
            'updateCostAllocationTagsStatus',
            'updateCostCategoryDefinition',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAnomalyMonitor' => $this->createAnomalyMonitor(),
            'createAnomalySubscription' => $this->createAnomalySubscription(),
            'createCostCategoryDefinition' => $this->createCostCategoryDefinition(),
            'deleteAnomalyMonitor' => $this->deleteAnomalyMonitor(),
            'deleteAnomalySubscription' => $this->deleteAnomalySubscription(),
            'deleteCostCategoryDefinition' => $this->deleteCostCategoryDefinition(),
            'describeCostCategoryDefinition' => $this->describeCostCategoryDefinition(),
            'getAnomalies' => $this->getAnomalies(),
            'getAnomalyMonitors' => $this->getAnomalyMonitors(),
            'getAnomalySubscriptions' => $this->getAnomalySubscriptions(),
            'getApproximateUsageRecords' => $this->getApproximateUsageRecords(),
            'getCommitmentPurchaseAnalysis' => $this->getCommitmentPurchaseAnalysis(),
            'getCostAndUsage' => $this->getCostAndUsage(),
            'getCostAndUsageWithResources' => $this->getCostAndUsageWithResources(),
            'getCostCategories' => $this->getCostCategories(),
            'getCostForecast' => $this->getCostForecast(),
            'getDimensionValues' => $this->getDimensionValues(),
            'getReservationCoverage' => $this->getReservationCoverage(),
            'getReservationPurchaseRecommendation' => $this->getReservationPurchaseRecommendation(),
            'getReservationUtilization' => $this->getReservationUtilization(),
            'getRightsizingRecommendation' => $this->getRightsizingRecommendation(),
            'getSavingsPlanPurchaseRecommendationDetails' => $this->getSavingsPlanPurchaseRecommendationDetails(),
            'getSavingsPlansCoverage' => $this->getSavingsPlansCoverage(),
            'getSavingsPlansPurchaseRecommendation' => $this->getSavingsPlansPurchaseRecommendation(),
            'getSavingsPlansUtilization' => $this->getSavingsPlansUtilization(),
            'getSavingsPlansUtilizationDetails' => $this->getSavingsPlansUtilizationDetails(),
            'getTags' => $this->getTags(),
            'getUsageForecast' => $this->getUsageForecast(),
            'listCommitmentPurchaseAnalyses' => $this->listCommitmentPurchaseAnalyses(),
            'listCostAllocationTagBackfillHistory' => $this->listCostAllocationTagBackfillHistory(),
            'listCostAllocationTags' => $this->listCostAllocationTags(),
            'listCostCategoryDefinitions' => $this->listCostCategoryDefinitions(),
            'listSavingsPlansPurchaseRecommendationGeneration' => $this->listSavingsPlansPurchaseRecommendationGeneration(),
            'listTagsForResource' => $this->listTagsForResource(),
            'provideAnomalyFeedback' => $this->provideAnomalyFeedback(),
            'startCommitmentPurchaseAnalysis' => $this->startCommitmentPurchaseAnalysis(),
            'startCostAllocationTagBackfill' => $this->startCostAllocationTagBackfill(),
            'startSavingsPlansPurchaseRecommendationGeneration' => $this->startSavingsPlansPurchaseRecommendationGeneration(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAnomalyMonitor' => $this->updateAnomalyMonitor(),
            'updateAnomalySubscription' => $this->updateAnomalySubscription(),
            'updateCostAllocationTagsStatus' => $this->updateCostAllocationTagsStatus(),
            'updateCostCategoryDefinition' => $this->updateCostCategoryDefinition(),
        };
    }
    private function createAnomalyMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAnomalySubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCostCategoryDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CostCategoryArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EffectiveStart'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAnomalyMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAnomalySubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCostCategoryDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CostCategoryArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EffectiveEnd'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeCostCategoryDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CostCategory'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CostCategoryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveStart'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveEnd'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('SplitChargeRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CostCategoryExpression.v1'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                            new \PHPStan\Type\Constant\ConstantStringType('InheritedValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Or'),
                                new \PHPStan\Type\Constant\ConstantStringType('And'),
                                new \PHPStan\Type\Constant\ConstantStringType('Not'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostCategories'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LINKED_ACCOUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LINKED_ACCOUNT_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PURCHASE_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REGION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CODE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('USAGE_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('USAGE_TYPE_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RECORD_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPERATING_SYSTEM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TENANCY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SCOPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIPTION_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LEGAL_ENTITY_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_OPTION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DATABASE_ENGINE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CACHE_ENGINE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_TYPE_FAMILY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BILLING_ENTITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RESERVATION_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RIGHTSIZING_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_TYPE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLAN_ARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PAYMENT_OPTION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGREEMENT_END_DATE_TIME_AFTER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGREEMENT_END_DATE_TIME_BEFORE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INVOICING_ENTITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ANOMALY_TOTAL_IMPACT_ABSOLUTE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ANOMALY_TOTAL_IMPACT_PERCENTAGE'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                        ]),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionKey'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LINKED_ACCOUNT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TAG'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERITED_VALUE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                            new \PHPStan\Type\Constant\ConstantStringType('Method'),
                            new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROPORTIONAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVEN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOCATION_PERCENTAGES'),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Component'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('COST_EXPLORER'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('APPLIED'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAnomalies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Anomalies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyStartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyEndDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootCauses'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnomalyScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('Impact'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Feedback'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('LinkedAccount'),
                                new \PHPStan\Type\Constant\ConstantStringType('LinkedAccountName'),
                                new \PHPStan\Type\Constant\ConstantStringType('UsageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Impact'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Contribution'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentScore'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxImpact'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalImpact'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalActualSpend'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalExpectedSpend'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalImpactPercentage'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('YES'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLANNED_ACTIVITY'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAnomalyMonitors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyMonitors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorDimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionalValueCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIMENSIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Or'),
                            new \PHPStan\Type\Constant\ConstantStringType('And'),
                            new \PHPStan\Type\Constant\ConstantStringType('Not'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('CostCategories'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINKED_ACCOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINKED_ACCOUNT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PURCHASE_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REGION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USAGE_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USAGE_TYPE_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RECORD_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATING_SYSTEM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TENANCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCOPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIPTION_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LEGAL_ENTITY_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_OPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE_ENGINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CACHE_ENGINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_TYPE_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BILLING_ENTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESERVATION_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RIGHTSIZING_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLAN_ARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAYMENT_OPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AGREEMENT_END_DATE_TIME_AFTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AGREEMENT_END_DATE_TIME_BEFORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVOICING_ENTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANOMALY_TOTAL_IMPACT_ABSOLUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANOMALY_TOTAL_IMPACT_PERCENTAGE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAnomalySubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalySubscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorArnList'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThresholdExpression'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CONFIRMED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DECLINED'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMMEDIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEKLY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Or'),
                            new \PHPStan\Type\Constant\ConstantStringType('And'),
                            new \PHPStan\Type\Constant\ConstantStringType('Not'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('CostCategories'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\MixedType(),
                            ])),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINKED_ACCOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINKED_ACCOUNT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PURCHASE_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REGION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE_CODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USAGE_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USAGE_TYPE_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RECORD_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATING_SYSTEM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TENANCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCOPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLATFORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIPTION_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LEGAL_ENTITY_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_OPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE_ENGINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CACHE_ENGINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_TYPE_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BILLING_ENTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESERVATION_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RIGHTSIZING_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_TYPE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLAN_ARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAYMENT_OPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AGREEMENT_END_DATE_TIME_AFTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AGREEMENT_END_DATE_TIME_BEFORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVOICING_ENTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANOMALY_TOTAL_IMPACT_ABSOLUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANOMALY_TOTAL_IMPACT_PERCENTAGE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
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
    private function getApproximateUsageRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Services'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalRecords'),
                new \PHPStan\Type\Constant\ConstantStringType('LookbackPeriod'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCommitmentPurchaseAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedCompletionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisCompletionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisStartedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisId'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('CommitmentPurchaseAnalysisConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NO_USAGE_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_SAVINGS_PLANS_TO_ADD'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_SAVINGS_PLANS_TO_EXCLUDE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_ACCOUNT_ID'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansPurchaseAnalysisDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookbackPeriodInHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentAverageCoverage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentAverageHourlyOnDemandSpend'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentMaximumHourlyOnDemandSpend'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentMinimumHourlyOnDemandSpend'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentOnDemandSpend'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExistingHourlyCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('HourlyCommitmentToPurchase'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedAverageCoverage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedAverageUtilization'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavingsAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCostWithCurrentCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedROI'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedCommitmentCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestUsageTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpfrontCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricsOverLookbackPeriod'),
                    ], [
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentCoverage'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedCoverage'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedNewCommitmentUtilization'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansPurchaseAnalysisConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansToAdd'),
                        new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansToExclude'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookBackTimePeriod'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PAYER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MAX_SAVINGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_COMMITMENT'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceFamily'),
                                new \PHPStan\Type\Constant\ConstantStringType('TermInYears'),
                                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansCommitment'),
                                new \PHPStan\Type\Constant\ConstantStringType('OfferingId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LIGHT_UTILIZATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM_UTILIZATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAVY_UTILIZATION'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_SP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_SP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAGEMAKER_SP'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCostAndUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultsByTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DimensionValueAttributes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIMENSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('COST_CATEGORY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                        new \PHPStan\Type\Constant\ConstantStringType('Estimated'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getCostAndUsageWithResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultsByTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DimensionValueAttributes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIMENSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('COST_CATEGORY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                        new \PHPStan\Type\Constant\ConstantStringType('Estimated'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getCostCategories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CostCategoryNames'),
                new \PHPStan\Type\Constant\ConstantStringType('CostCategoryValues'),
                new \PHPStan\Type\Constant\ConstantStringType('ReturnSize'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalSize'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getCostForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Total'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastResultsByTime'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MeanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionIntervalLowerBound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionIntervalUpperBound'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDimensionValues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DimensionValues'),
                new \PHPStan\Type\Constant\ConstantStringType('ReturnSize'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalSize'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getReservationCoverage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoveragesByTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Total'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                        new \PHPStan\Type\Constant\ConstantStringType('Total'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Coverage'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CoverageHours'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CoverageNormalizedUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CoverageCost'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandHours'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ReservedHours'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TotalRunningHours'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CoverageHoursPercentage'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandNormalizedUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNormalizedUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TotalRunningNormalizedUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CoverageNormalizedUnitsPercentage'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandCost'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CoverageHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('CoverageNormalizedUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('CoverageCost'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandHours'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReservedHours'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalRunningHours'),
                                new \PHPStan\Type\Constant\ConstantStringType('CoverageHoursPercentage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandNormalizedUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReservedNormalizedUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalRunningNormalizedUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('CoverageNormalizedUnitsPercentage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandCost'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoverageHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoverageNormalizedUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoverageCost'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalRunningHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoverageHoursPercentage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandNormalizedUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNormalizedUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalRunningNormalizedUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoverageNormalizedUnitsPercentage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandCost'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getReservationPurchaseRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GenerationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookbackPeriodInDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('TermInYears'),
                        new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationSummary'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PAYER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SEVEN_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('THIRTY_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SIXTY_DAYS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIGHT_UTILIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM_UTILIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEAVY_UTILIZATION'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2Specification'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OfferingClass'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERTIBLE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecommendedNumberOfInstancesToPurchase'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecommendedNormalizedUnitsToPurchase'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumNumberOfInstancesUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumNormalizedUnitsUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumNumberOfInstancesUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumNormalizedUnitsUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('AverageNumberOfInstancesUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('AverageNormalizedUnitsUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('AverageUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedBreakEvenInMonths'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavingsAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlyOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('EstimatedReservationCostForLookbackPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('UpfrontCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecurringStandardMonthlyCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReservedCapacityDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecommendedNumberOfCapacityUnitsToPurchase'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumNumberOfCapacityUnitsUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumNumberOfCapacityUnitsUsedPerHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('AverageNumberOfCapacityUnitsUsedPerHour'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2InstanceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDSInstanceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftInstanceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ElastiCacheInstanceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ESInstanceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MemoryDBInstanceDetails'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Family'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tenancy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CurrentGeneration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SizeFlexEligible'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Family'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseEngine'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseEdition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentOption'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CurrentGeneration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SizeFlexEligible'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Family'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CurrentGeneration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SizeFlexEligible'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Family'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ProductDescription'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CurrentGeneration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SizeFlexEligible'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceClass'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceSize'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CurrentGeneration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SizeFlexEligible'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Family'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CurrentGeneration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SizeFlexEligible'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
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
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DynamoDBCapacityDetails'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TotalEstimatedMonthlySavingsAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalEstimatedMonthlySavingsPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getReservationUtilization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UtilizationsByTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Total'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                        new \PHPStan\Type\Constant\ConstantStringType('Total'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Utilization'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentageInUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PurchasedHours'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PurchasedUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TotalActualHours'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TotalActualUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnusedHours'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnusedUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandCostOfRIHoursUsed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetRISavings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TotalPotentialRISavings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AmortizedUpfrontFee'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AmortizedRecurringFee'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TotalAmortizedFee'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RICostForUnusedHours'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RealizedSavings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnrealizedSavings'),
                                ], [
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
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentageInUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('PurchasedHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('PurchasedUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalActualHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalActualUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnusedHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnusedUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandCostOfRIHoursUsed'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetRISavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalPotentialRISavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmortizedUpfrontFee'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmortizedRecurringFee'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalAmortizedFee'),
                            new \PHPStan\Type\Constant\ConstantStringType('RICostForUnusedHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealizedSavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnrealizedSavings'),
                        ], [
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentageInUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('PurchasedHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('PurchasedUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalActualHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalActualUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnusedHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnusedUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandCostOfRIHoursUsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetRISavings'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalPotentialRISavings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmortizedUpfrontFee'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmortizedRecurringFee'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalAmortizedFee'),
                    new \PHPStan\Type\Constant\ConstantStringType('RICostForUnusedHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('RealizedSavings'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnrealizedSavings'),
                ], [
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRightsizingRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                new \PHPStan\Type\Constant\ConstantStringType('RightsizingRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GenerationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SEVEN_DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRTY_DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIXTY_DAYS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalRecommendationCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedTotalMonthlySavingsAmount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsCurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsPercentage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('RightsizingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifyRecommendationDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('TerminateRecommendationDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingReasonCodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceUtilization'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReservationCoveredHoursInLookbackPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansCoveredHoursInLookbackPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandHoursInLookbackPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalRunningHoursInLookbackPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonthlyCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchOptions'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_SENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CASE_INSENSITIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EC2ResourceDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HourlyOnDemandRate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Sku'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkPerformance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Vcpu'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EC2ResourceUtilization'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxCpuUtilizationPercentage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxMemoryUtilizationPercentage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxStorageUtilizationPercentage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EBSResourceUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DiskResourceUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkResourceUtilization'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EbsReadOpsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EbsWriteOpsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EbsReadBytesPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EbsWriteBytesPerSecond'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DiskReadOpsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DiskWriteOpsPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DiskReadBytesPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DiskWriteBytesPerSecond'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInBytesPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkOutBytesPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkPacketsInPerSecond'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkPacketsOutPerSecond'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetInstances'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlyCost'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DefaultTargetInstance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedResourceUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PlatformDifferences'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EC2ResourceDetails'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HourlyOnDemandRate'),
                                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Sku'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NetworkPerformance'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Vcpu'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EC2ResourceUtilization'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('MaxCpuUtilizationPercentage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MaxMemoryUtilizationPercentage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MaxStorageUtilizationPercentage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EBSResourceUtilization'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DiskResourceUtilization'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NetworkResourceUtilization'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('EbsReadOpsPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EbsWriteOpsPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EbsReadBytesPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EbsWriteBytesPerSecond'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DiskReadOpsPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DiskWriteOpsPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DiskReadBytesPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DiskWriteBytesPerSecond'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInBytesPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NetworkOutBytesPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NetworkPacketsInPerSecond'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NetworkPacketsOutPerSecond'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HYPERVISOR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STORAGE_INTERFACE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_STORE_AVAILABILITY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUALIZATION_TYPE'),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CPU_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CPU_UNDER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY_UNDER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_THROUGHPUT_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_THROUGHPUT_UNDER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_IOPS_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_IOPS_UNDER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_BANDWIDTH_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_BANDWIDTH_UNDER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PPS_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PPS_UNDER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_IOPS_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_IOPS_UNDER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_THROUGHPUT_OVER_PROVISIONED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_THROUGHPUT_UNDER_PROVISIONED'),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('BenefitsConsidered'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAME_INSTANCE_FAMILY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CROSS_INSTANCE_FAMILY'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getSavingsPlanPurchaseRecommendationDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecommendationDetailId'),
                new \PHPStan\Type\Constant\ConstantStringType('RecommendationDetailData'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('LookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TermInYears'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GenerationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestUsageTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentAverageHourlyOnDemandSpend'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentMaximumHourlyOnDemandSpend'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentMinimumHourlyOnDemandSpend'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedAverageUtilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavingsAmount'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCost'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCostWithCurrentCommitment'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedROI'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSPCost'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsAmount'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExistingHourlyCommitment'),
                    new \PHPStan\Type\Constant\ConstantStringType('HourlyCommitmentToPurchase'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpfrontCost'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentAverageCoverage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedAverageCoverage'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricsOverLookbackPeriod'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PAYER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SEVEN_DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRTY_DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIXTY_DAYS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_SP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_SP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAGEMAKER_SP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIGHT_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEAVY_UTILIZATION'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentCoverage'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedCoverage'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedNewCommitmentUtilization'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getSavingsPlansCoverage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansCoverages'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Coverage'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SpendCoveredBySavingsPlans'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('CoveragePercentage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
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
    private function getSavingsPlansPurchaseRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansPurchaseRecommendation'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GenerationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TermInYears'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('LookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansPurchaseRecommendationDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansPurchaseRecommendationSummary'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PAYER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_SP'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_SP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAGEMAKER_SP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIGHT_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEAVY_UTILIZATION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SEVEN_DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRTY_DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIXTY_DAYS'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedROI'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedSPCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCostWithCurrentCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('HourlyCommitmentToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedAverageUtilization'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavingsAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentMinimumHourlyOnDemandSpend'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentMaximumHourlyOnDemandSpend'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentAverageHourlyOnDemandSpend'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecommendationDetailId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceFamily'),
                                new \PHPStan\Type\Constant\ConstantStringType('OfferingId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedROI'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTotalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentOnDemandSpend'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalRecommendationCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DailyCommitmentToPurchase'),
                        new \PHPStan\Type\Constant\ConstantStringType('HourlyCommitmentToPurchase'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedSavingsPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlySavingsAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedOnDemandCostWithCurrentCommitment'),
                    ], [
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
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSavingsPlansUtilization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansUtilizationsByTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Total'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('Utilization'),
                        new \PHPStan\Type\Constant\ConstantStringType('Savings'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmortizedCommitment'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TotalCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('UsedCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnusedCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NetSavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandCostEquivalent'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AmortizedRecurringCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmortizedUpfrontCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalAmortizedCommitment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Utilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('Savings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmortizedCommitment'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsedCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NetSavings'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandCostEquivalent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmortizedRecurringCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmortizedUpfrontCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmortizedCommitment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSavingsPlansUtilizationDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansUtilizationDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Total'),
                new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SavingsPlanArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Utilization'),
                        new \PHPStan\Type\Constant\ConstantStringType('Savings'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmortizedCommitment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TotalCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('UsedCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnusedCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NetSavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandCostEquivalent'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AmortizedRecurringCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmortizedUpfrontCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalAmortizedCommitment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Utilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('Savings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmortizedCommitment'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsedCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnusedCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('UtilizationPercentage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NetSavings'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandCostEquivalent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmortizedRecurringCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmortizedUpfrontCommitment'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmortizedCommitment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ReturnSize'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalSize'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getUsageForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Total'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastResultsByTime'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MeanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionIntervalLowerBound'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictionIntervalUpperBound'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCommitmentPurchaseAnalyses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedCompletionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisCompletionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisStartedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CommitmentPurchaseAnalysisConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_USAGE_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SAVINGS_PLANS_TO_ADD'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SAVINGS_PLANS_TO_EXCLUDE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_ACCOUNT_ID'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansPurchaseAnalysisConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccountScope'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('AnalysisType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansToAdd'),
                                new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansToExclude'),
                                new \PHPStan\Type\Constant\ConstantStringType('LookBackTimePeriod'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PAYER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MAX_SAVINGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_COMMITMENT'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFamily'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TermInYears'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SavingsPlansCommitment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OfferingId'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LIGHT_UTILIZATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM_UTILIZATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAVY_UTILIZATION'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_SP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_SP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SAGEMAKER_SP'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
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
    private function listCostAllocationTagBackfillHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackfillRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackfillFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackfillStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCostAllocationTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CostAllocationTags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUsedDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWSGenerated'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserDefined'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCostCategoryDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CostCategoryReferences'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CostCategoryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('EffectiveStart'),
                        new \PHPStan\Type\Constant\ConstantStringType('EffectiveEnd'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfRules'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Component'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('COST_EXPLORER'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLIED'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSavingsPlansPurchaseRecommendationGeneration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GenerationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerationStartedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerationCompletionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedCompletionTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
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
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
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
    private function provideAnomalyFeedback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnomalyId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startCommitmentPurchaseAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisId'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisStartedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedCompletionTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startCostAllocationTagBackfill(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackfillRequest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackfillFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackfillStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startSavingsPlansPurchaseRecommendationGeneration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecommendationId'),
                new \PHPStan\Type\Constant\ConstantStringType('GenerationStartedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedCompletionTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function updateAnomalyMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAnomalySubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateCostAllocationTagsStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateCostCategoryDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CostCategoryArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EffectiveStart'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}