<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BudgetsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Budgets\BudgetsClient>
     */
    public function getClass(): string
    {
        return \Aws\Budgets\BudgetsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createBudget',
            'createBudgetAction',
            'createNotification',
            'createSubscriber',
            'deleteBudget',
            'deleteBudgetAction',
            'deleteNotification',
            'deleteSubscriber',
            'describeBudget',
            'describeBudgetAction',
            'describeBudgetActionHistories',
            'describeBudgetActionsForAccount',
            'describeBudgetActionsForBudget',
            'describeBudgetNotificationsForAccount',
            'describeBudgetPerformanceHistory',
            'describeBudgets',
            'describeNotificationsForBudget',
            'describeSubscribersForNotification',
            'executeBudgetAction',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateBudget',
            'updateBudgetAction',
            'updateNotification',
            'updateSubscriber',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createBudget' => $this->createBudget(),
            'createBudgetAction' => $this->createBudgetAction(),
            'createNotification' => $this->createNotification(),
            'createSubscriber' => $this->createSubscriber(),
            'deleteBudget' => $this->deleteBudget(),
            'deleteBudgetAction' => $this->deleteBudgetAction(),
            'deleteNotification' => $this->deleteNotification(),
            'deleteSubscriber' => $this->deleteSubscriber(),
            'describeBudget' => $this->describeBudget(),
            'describeBudgetAction' => $this->describeBudgetAction(),
            'describeBudgetActionHistories' => $this->describeBudgetActionHistories(),
            'describeBudgetActionsForAccount' => $this->describeBudgetActionsForAccount(),
            'describeBudgetActionsForBudget' => $this->describeBudgetActionsForBudget(),
            'describeBudgetNotificationsForAccount' => $this->describeBudgetNotificationsForAccount(),
            'describeBudgetPerformanceHistory' => $this->describeBudgetPerformanceHistory(),
            'describeBudgets' => $this->describeBudgets(),
            'describeNotificationsForBudget' => $this->describeNotificationsForBudget(),
            'describeSubscribersForNotification' => $this->describeSubscribersForNotification(),
            'executeBudgetAction' => $this->executeBudgetAction(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateBudget' => $this->updateBudget(),
            'updateBudgetAction' => $this->updateBudgetAction(),
            'updateNotification' => $this->updateNotification(),
            'updateSubscriber' => $this->updateSubscriber(),
        };
    }
    private function createBudget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createBudgetAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createSubscriber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteBudget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteBudgetAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IAM_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_SCP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_SSM_DOCUMENTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdType'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScpActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('SsmActionDefinition'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                            new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Users'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionSubType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_EC2_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_RDS_INSTANCES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSubscriber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeBudget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Budget'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlannedBudgetLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('CostFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('CostTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalculatedSpend'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoAdjustData'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeTax'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseBlended'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeRefund'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeCredit'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeUpfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeRecurring'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeOtherSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeSupport'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeDiscount'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseAmortized'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUARTERLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANNUALLY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Start'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActualSpend'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForecastedSpend'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COST'),
                        new \PHPStan\Type\Constant\ConstantStringType('RI_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RI_COVERAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_COVERAGE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAdjustType'),
                        new \PHPStan\Type\Constant\ConstantStringType('HistoricalOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastAutoAdjustTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HISTORICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORECAST'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BudgetAdjustmentPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('LookBackAvailablePeriods'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeBudgetAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IAM_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_SCP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_SSM_DOCUMENTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdType'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScpActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('SsmActionDefinition'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                            new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Users'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionSubType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_EC2_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_RDS_INSTANCES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeBudgetActionHistories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActionHistories'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionHistoryDetails'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_ACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_ACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_ACTION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApprovalModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('APPLY_IAM_POLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('APPLY_SCP_POLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUN_SSM_DOCUMENTS'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdType'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IamActionDefinition'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScpActionDefinition'),
                                new \PHPStan\Type\Constant\ConstantStringType('SsmActionDefinition'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Users'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetIds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ActionSubType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STOP_EC2_INSTANCES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STOP_RDS_INSTANCES'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBudgetActionsForAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IAM_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_SCP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_SSM_DOCUMENTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdType'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScpActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('SsmActionDefinition'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                            new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Users'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionSubType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_EC2_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_RDS_INSTANCES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBudgetActionsForBudget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IAM_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_SCP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_SSM_DOCUMENTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdType'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScpActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('SsmActionDefinition'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                            new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Users'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionSubType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_EC2_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_RDS_INSTANCES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBudgetNotificationsForAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BudgetNotificationsForAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Notifications'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThresholdType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationState'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBudgetPerformanceHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BudgetPerformanceHistory'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CostFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('CostTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetedAndActualAmountsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COST'),
                        new \PHPStan\Type\Constant\ConstantStringType('RI_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RI_COVERAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_COVERAGE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeTax'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseBlended'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeRefund'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeCredit'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeUpfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeRecurring'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeOtherSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeSupport'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeDiscount'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseAmortized'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUARTERLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANNUALLY'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BudgetedAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBudgets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Budgets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlannedBudgetLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('CostFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('CostTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalculatedSpend'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoAdjustData'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeTax'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseBlended'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeRefund'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeCredit'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeUpfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeRecurring'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeOtherSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeSupport'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeDiscount'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseAmortized'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUARTERLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANNUALLY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Start'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActualSpend'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForecastedSpend'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COST'),
                        new \PHPStan\Type\Constant\ConstantStringType('RI_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RI_COVERAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_UTILIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS_COVERAGE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAdjustType'),
                        new \PHPStan\Type\Constant\ConstantStringType('HistoricalOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastAutoAdjustTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HISTORICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORECAST'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BudgetAdjustmentPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('LookBackAvailablePeriods'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeNotificationsForBudget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Notifications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThresholdType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationState'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OK'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSubscribersForNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeBudgetAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVE_BUDGET_ACTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRY_BUDGET_ACTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVERSE_BUDGET_ACTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESET_BUDGET_ACTION'),
                ]),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
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
    private function updateBudget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateBudgetAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                new \PHPStan\Type\Constant\ConstantStringType('OldAction'),
                new \PHPStan\Type\Constant\ConstantStringType('NewAction'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IAM_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_SCP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_SSM_DOCUMENTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdType'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScpActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('SsmActionDefinition'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                            new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Users'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionSubType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_EC2_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_RDS_INSTANCES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovalModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORECASTED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IAM_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_SCP_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_SSM_DOCUMENTS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionThresholdType'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABSOLUTE_VALUE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScpActionDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('SsmActionDefinition'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                            new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Users'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionSubType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_EC2_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_RDS_INSTANCES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVERSE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESET_FAILURE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SNS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSubscriber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}