<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BCMPricingCalculatorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\BCMPricingCalculator\BCMPricingCalculatorClient>
     */
    public function getClass(): string
    {
        return \Aws\BCMPricingCalculator\BCMPricingCalculatorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchCreateBillScenarioCommitmentModification',
            'batchCreateBillScenarioUsageModification',
            'batchCreateWorkloadEstimateUsage',
            'batchDeleteBillScenarioCommitmentModification',
            'batchDeleteBillScenarioUsageModification',
            'batchDeleteWorkloadEstimateUsage',
            'batchUpdateBillScenarioCommitmentModification',
            'batchUpdateBillScenarioUsageModification',
            'batchUpdateWorkloadEstimateUsage',
            'createBillEstimate',
            'createBillScenario',
            'createWorkloadEstimate',
            'deleteBillEstimate',
            'deleteBillScenario',
            'deleteWorkloadEstimate',
            'getBillEstimate',
            'getBillScenario',
            'getPreferences',
            'getWorkloadEstimate',
            'listBillEstimateCommitments',
            'listBillEstimateInputCommitmentModifications',
            'listBillEstimateInputUsageModifications',
            'listBillEstimateLineItems',
            'listBillEstimates',
            'listBillScenarioCommitmentModifications',
            'listBillScenarioUsageModifications',
            'listBillScenarios',
            'listTagsForResource',
            'listWorkloadEstimateUsage',
            'listWorkloadEstimates',
            'tagResource',
            'untagResource',
            'updateBillEstimate',
            'updateBillScenario',
            'updatePreferences',
            'updateWorkloadEstimate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchCreateBillScenarioCommitmentModification' => $this->batchCreateBillScenarioCommitmentModification(),
            'batchCreateBillScenarioUsageModification' => $this->batchCreateBillScenarioUsageModification(),
            'batchCreateWorkloadEstimateUsage' => $this->batchCreateWorkloadEstimateUsage(),
            'batchDeleteBillScenarioCommitmentModification' => $this->batchDeleteBillScenarioCommitmentModification(),
            'batchDeleteBillScenarioUsageModification' => $this->batchDeleteBillScenarioUsageModification(),
            'batchDeleteWorkloadEstimateUsage' => $this->batchDeleteWorkloadEstimateUsage(),
            'batchUpdateBillScenarioCommitmentModification' => $this->batchUpdateBillScenarioCommitmentModification(),
            'batchUpdateBillScenarioUsageModification' => $this->batchUpdateBillScenarioUsageModification(),
            'batchUpdateWorkloadEstimateUsage' => $this->batchUpdateWorkloadEstimateUsage(),
            'createBillEstimate' => $this->createBillEstimate(),
            'createBillScenario' => $this->createBillScenario(),
            'createWorkloadEstimate' => $this->createWorkloadEstimate(),
            'deleteBillEstimate' => $this->deleteBillEstimate(),
            'deleteBillScenario' => $this->deleteBillScenario(),
            'deleteWorkloadEstimate' => $this->deleteWorkloadEstimate(),
            'getBillEstimate' => $this->getBillEstimate(),
            'getBillScenario' => $this->getBillScenario(),
            'getPreferences' => $this->getPreferences(),
            'getWorkloadEstimate' => $this->getWorkloadEstimate(),
            'listBillEstimateCommitments' => $this->listBillEstimateCommitments(),
            'listBillEstimateInputCommitmentModifications' => $this->listBillEstimateInputCommitmentModifications(),
            'listBillEstimateInputUsageModifications' => $this->listBillEstimateInputUsageModifications(),
            'listBillEstimateLineItems' => $this->listBillEstimateLineItems(),
            'listBillEstimates' => $this->listBillEstimates(),
            'listBillScenarioCommitmentModifications' => $this->listBillScenarioCommitmentModifications(),
            'listBillScenarioUsageModifications' => $this->listBillScenarioUsageModifications(),
            'listBillScenarios' => $this->listBillScenarios(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorkloadEstimateUsage' => $this->listWorkloadEstimateUsage(),
            'listWorkloadEstimates' => $this->listWorkloadEstimates(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateBillEstimate' => $this->updateBillEstimate(),
            'updateBillScenario' => $this->updateBillScenario(),
            'updatePreferences' => $this->updatePreferences(),
            'updateWorkloadEstimate' => $this->updateWorkloadEstimate(),
        };
    }
    private function batchCreateBillScenarioCommitmentModification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitmentAction'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('addReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('addSavingsPlanAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateSavingsPlanAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitment'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_ACCOUNT'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchCreateBillScenarioUsageModification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantities'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
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
                                new \PHPStan\Type\Constant\ConstantStringType('startHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('and'),
                                new \PHPStan\Type\Constant\ConstantStringType('or'),
                                new \PHPStan\Type\Constant\ConstantStringType('not'),
                                new \PHPStan\Type\Constant\ConstantStringType('costCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchCreateWorkloadEstimateUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('and'),
                                new \PHPStan\Type\Constant\ConstantStringType('or'),
                                new \PHPStan\Type\Constant\ConstantStringType('not'),
                                new \PHPStan\Type\Constant\ConstantStringType('costCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDeleteBillScenarioCommitmentModification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDeleteBillScenarioUsageModification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDeleteWorkloadEstimateUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchUpdateBillScenarioCommitmentModification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitmentAction'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('addReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('addSavingsPlanAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateSavingsPlanAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitment'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchUpdateBillScenarioUsageModification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantities'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsage'),
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
                                new \PHPStan\Type\Constant\ConstantStringType('startHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('and'),
                                new \PHPStan\Type\Constant\ConstantStringType('or'),
                                new \PHPStan\Type\Constant\ConstantStringType('not'),
                                new \PHPStan\Type\Constant\ConstantStringType('costCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchUpdateWorkloadEstimateUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('and'),
                                new \PHPStan\Type\Constant\ConstantStringType('or'),
                                new \PHPStan\Type\Constant\ConstantStringType('not'),
                                new \PHPStan\Type\Constant\ConstantStringType('costCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createBillEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                new \PHPStan\Type\Constant\ConstantStringType('costSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalCostDifference'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceCostDifferences'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('historicalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('historicalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createBillScenario(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkloadEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('rateType'),
                new \PHPStan\Type\Constant\ConstantStringType('rateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('totalCost'),
                new \PHPStan\Type\Constant\ConstantStringType('costCurrency'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTION_NEEDED'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBillEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteBillScenario(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWorkloadEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getBillEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                new \PHPStan\Type\Constant\ConstantStringType('costSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalCostDifference'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceCostDifferences'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('historicalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('historicalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getBillScenario(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('managementAccountRateTypeSelections'),
                new \PHPStan\Type\Constant\ConstantStringType('memberAccountRateTypeSelections'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getWorkloadEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('rateType'),
                new \PHPStan\Type\Constant\ConstantStringType('rateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('totalCost'),
                new \PHPStan\Type\Constant\ConstantStringType('costCurrency'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTION_NEEDED'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillEstimateCommitments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('purchaseAgreementType'),
                        new \PHPStan\Type\Constant\ConstantStringType('offeringId'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('termLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('upfrontPayment'),
                        new \PHPStan\Type\Constant\ConstantStringType('monthlyPayment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAVINGS_PLANS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESERVED_INSTANCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillEstimateInputCommitmentModifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitmentAction'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('addReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('addSavingsPlanAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateSavingsPlanAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitment'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillEstimateInputUsageModifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantities'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsage'),
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
                                new \PHPStan\Type\Constant\ConstantStringType('startHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('and'),
                                new \PHPStan\Type\Constant\ConstantStringType('or'),
                                new \PHPStan\Type\Constant\ConstantStringType('not'),
                                new \PHPStan\Type\Constant\ConstantStringType('costCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillEstimateLineItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lineItemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lineItemType'),
                        new \PHPStan\Type\Constant\ConstantStringType('payerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedUsageQuantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsageQuantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsPlanArns'),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
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
    private function listBillEstimates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillScenarioCommitmentModifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitmentAction'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('addReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('addSavingsPlanAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateReservedInstanceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('negateSavingsPlanAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanOfferingId'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitment'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('reservedInstancesId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillScenarioUsageModifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantities'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsage'),
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
                                new \PHPStan\Type\Constant\ConstantStringType('startHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('and'),
                                new \PHPStan\Type\Constant\ConstantStringType('or'),
                                new \PHPStan\Type\Constant\ConstantStringType('not'),
                                new \PHPStan\Type\Constant\ConstantStringType('costCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBillScenarios(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listWorkloadEstimateUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('historicalUsage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('usageAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('and'),
                                new \PHPStan\Type\Constant\ConstantStringType('or'),
                                new \PHPStan\Type\Constant\ConstantStringType('not'),
                                new \PHPStan\Type\Constant\ConstantStringType('costCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\MixedType(),
                                ])),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('matchOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkloadEstimates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('rateType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rateTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('costCurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_NEEDED'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
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
    private function updateBillEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                new \PHPStan\Type\Constant\ConstantStringType('costSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('totalCostDifference'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceCostDifferences'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('historicalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('historicalCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCost'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateBillScenario(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('billInterval'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('managementAccountRateTypeSelections'),
                new \PHPStan\Type\Constant\ConstantStringType('memberAccountRateTypeSelections'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateWorkloadEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('rateType'),
                new \PHPStan\Type\Constant\ConstantStringType('rateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('totalCost'),
                new \PHPStan\Type\Constant\ConstantStringType('costCurrency'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BEFORE_DISCOUNTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AFTER_DISCOUNTS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTION_NEEDED'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}