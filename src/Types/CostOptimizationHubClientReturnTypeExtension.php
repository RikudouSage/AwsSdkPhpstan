<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CostOptimizationHubClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CostOptimizationHub\CostOptimizationHubClient>
     */
    public function getClass(): string
    {
        return \Aws\CostOptimizationHub\CostOptimizationHubClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getPreferences',
            'getRecommendation',
            'listEnrollmentStatuses',
            'listRecommendationSummaries',
            'listRecommendations',
            'updateEnrollmentStatus',
            'updatePreferences',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getPreferences' => $this->getPreferences(),
            'getRecommendation' => $this->getRecommendation(),
            'listEnrollmentStatuses' => $this->listEnrollmentStatuses(),
            'listRecommendationSummaries' => $this->listRecommendationSummaries(),
            'listRecommendations' => $this->listRecommendations(),
            'updateEnrollmentStatus' => $this->updateEnrollmentStatus(),
            'updatePreferences' => $this->updatePreferences(),
        };
    }
    private function getPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                new \PHPStan\Type\Constant\ConstantStringType('memberAccountDiscountVisibility'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BeforeDiscounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('AfterDiscounts'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('All'),
                    new \PHPStan\Type\Constant\ConstantStringType('None'),
                ]),
            ]),
        ]);
    }
    private function getRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendationId'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationLookbackPeriodInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('costCalculationLookbackPeriodInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('estimatedSavingsPercentage'),
                new \PHPStan\Type\Constant\ConstantStringType('estimatedSavingsOverCostCalculationLookbackPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('currentResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendedResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('source'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCost'),
                new \PHPStan\Type\Constant\ConstantStringType('implementationEffort'),
                new \PHPStan\Type\Constant\ConstantStringType('restartNeeded'),
                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                new \PHPStan\Type\Constant\ConstantStringType('rollbackPossible'),
                new \PHPStan\Type\Constant\ConstantStringType('currentResourceDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendedResourceDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2Instance'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsVolume'),
                    new \PHPStan\Type\Constant\ConstantStringType('EcsService'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2AutoScalingGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('SageMakerSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2ReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpenSearchReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElastiCacheReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsDbInstanceStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsDbInstance'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2Instance'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsVolume'),
                    new \PHPStan\Type\Constant\ConstantStringType('EcsService'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2AutoScalingGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('SageMakerSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2ReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpenSearchReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElastiCacheReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsDbInstanceStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsDbInstance'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeOptimizer'),
                    new \PHPStan\Type\Constant\ConstantStringType('CostExplorer'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Low'),
                    new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('High'),
                    new \PHPStan\Type\Constant\ConstantStringType('VeryHigh'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Rightsize'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stop'),
                    new \PHPStan\Type\Constant\ConstantStringType('Upgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('PurchaseSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('PurchaseReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('MigrateToGraviton'),
                    new \PHPStan\Type\Constant\ConstantStringType('Delete'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScaleIn'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecsService'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2Instance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ebsVolume'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2AutoScalingGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2ReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('rdsReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('elastiCacheReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('openSearchReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('rdsDbInstance'),
                    new \PHPStan\Type\Constant\ConstantStringType('rdsDbInstanceStorage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('compute'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('memorySizeInMB'),
                                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                                new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('compute'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('memorySizeInMB'),
                                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                                new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instance'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('performance'),
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentState'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGb'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('mixedInstances'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('allocationStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SingleInstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MixedInstanceTypes'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Prioritized'),
                                new \PHPStan\Type\Constant\ConstantStringType('LowestPrice'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('offeringClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('tenancy'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('licenseModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseEdition'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseEngine'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentOption'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('hourlyCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('savingsPlansRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('monthlySavingsPlansEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCommitment'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('hourlyCommitment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('monthlySavingsPlansEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCommitment'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('hourlyCommitment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('monthlySavingsPlansEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCommitment'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instance'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dbInstanceClass'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('storageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('allocatedStorageInGb'),
                            new \PHPStan\Type\Constant\ConstantStringType('iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecsService'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2Instance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ebsVolume'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2AutoScalingGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2ReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('rdsReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('elastiCacheReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('openSearchReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftReservedInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerSavingsPlans'),
                    new \PHPStan\Type\Constant\ConstantStringType('rdsDbInstance'),
                    new \PHPStan\Type\Constant\ConstantStringType('rdsDbInstanceStorage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('compute'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('memorySizeInMB'),
                                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                                new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('compute'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('memorySizeInMB'),
                                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                                new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instance'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('performance'),
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentState'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGb'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('mixedInstances'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('allocationStrategy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SingleInstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MixedInstanceTypes'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Prioritized'),
                                new \PHPStan\Type\Constant\ConstantStringType('LowestPrice'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('offeringClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('tenancy'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('licenseModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseEdition'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseEngine'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentOption'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('normalizedUnitsToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfInstancesToPurchase'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeFlexEligible'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentGeneration'),
                            new \PHPStan\Type\Constant\ConstantStringType('upfrontCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthlyRecurringCost'),
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
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('monthlyReservationEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyAmortizedReservationCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('hourlyCommitment'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('savingsPlansRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('monthlySavingsPlansEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCommitment'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('hourlyCommitment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('monthlySavingsPlansEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCommitment'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('term'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('hourlyCommitment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('monthlySavingsPlansEligibleCost'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCommitment'),
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedOnDemandCost'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('instance'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dbInstanceClass'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCalculation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('storageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('allocatedStorageInGb'),
                            new \PHPStan\Type\Constant\ConstantStringType('iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usages'),
                            new \PHPStan\Type\Constant\ConstantStringType('pricing'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('usageAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostBeforeDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedNetUnusedAmortizedCommitments'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedDiscounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('estimatedCostAfterDiscounts'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlansDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesDiscount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('otherDiscount'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
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
    private function listEnrollmentStatuses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('includeMemberAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecommendationSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('estimatedTotalDedupedSavings'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('groupBy'),
                new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                new \PHPStan\Type\Constant\ConstantStringType('metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('savingsPercentage'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedSavingsPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCost'),
                    new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('implementationEffort'),
                    new \PHPStan\Type\Constant\ConstantStringType('restartNeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('rollbackPossible'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentResourceSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedResourceSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationLookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComputeOptimizer'),
                        new \PHPStan\Type\Constant\ConstantStringType('CostExplorer'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateEnrollmentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                new \PHPStan\Type\Constant\ConstantStringType('memberAccountDiscountVisibility'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BeforeDiscounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('AfterDiscounts'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('All'),
                    new \PHPStan\Type\Constant\ConstantStringType('None'),
                ]),
            ]),
        ]);
    }
}