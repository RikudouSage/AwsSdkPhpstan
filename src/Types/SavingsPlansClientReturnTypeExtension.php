<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SavingsPlansClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SavingsPlans\SavingsPlansClient>
     */
    public function getClass(): string
    {
        return \Aws\SavingsPlans\SavingsPlansClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createSavingsPlan',
            'deleteQueuedSavingsPlan',
            'describeSavingsPlanRates',
            'describeSavingsPlans',
            'describeSavingsPlansOfferingRates',
            'describeSavingsPlansOfferings',
            'listTagsForResource',
            'returnSavingsPlan',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createSavingsPlan' => $this->createSavingsPlan(),
            'deleteQueuedSavingsPlan' => $this->deleteQueuedSavingsPlan(),
            'describeSavingsPlanRates' => $this->describeSavingsPlanRates(),
            'describeSavingsPlans' => $this->describeSavingsPlans(),
            'describeSavingsPlansOfferingRates' => $this->describeSavingsPlansOfferingRates(),
            'describeSavingsPlansOfferings' => $this->describeSavingsPlansOfferings(),
            'listTagsForResource' => $this->listTagsForResource(),
            'returnSavingsPlan' => $this->returnSavingsPlan(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function createSavingsPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteQueuedSavingsPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeSavingsPlanRates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('searchResults'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('rate'),
                    new \PHPStan\Type\Constant\ConstantStringType('currency'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('productType'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Hrs'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda-GB-Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Request'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fargate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('SageMaker'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonEC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonECS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonEKS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSLambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonSageMaker'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('productDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('tenancy'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSavingsPlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('savingsPlans'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('offeringId'),
                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlanType'),
                    new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('productTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('currency'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitment'),
                    new \PHPStan\Type\Constant\ConstantStringType('upfrontPaymentAmount'),
                    new \PHPStan\Type\Constant\ConstantStringType('recurringPaymentAmount'),
                    new \PHPStan\Type\Constant\ConstantStringType('termDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('returnableUntil'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('payment-pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('payment-failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('active'),
                        new \PHPStan\Type\Constant\ConstantStringType('retired'),
                        new \PHPStan\Type\Constant\ConstantStringType('queued'),
                        new \PHPStan\Type\Constant\ConstantStringType('queued-deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending-return'),
                        new \PHPStan\Type\Constant\ConstantStringType('returned'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('SageMaker'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('All Upfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial Upfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('No Upfront'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fargate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('SageMaker'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSavingsPlansOfferingRates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('searchResults'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('savingsPlanOffering'),
                    new \PHPStan\Type\Constant\ConstantStringType('rate'),
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('productType'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('offeringId'),
                        new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('planType'),
                        new \PHPStan\Type\Constant\ConstantStringType('durationSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('planDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('All Upfront'),
                            new \PHPStan\Type\Constant\ConstantStringType('Partial Upfront'),
                            new \PHPStan\Type\Constant\ConstantStringType('No Upfront'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2Instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('SageMaker'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                            new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Hrs'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda-GB-Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Request'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fargate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('SageMaker'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonEC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonECS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonEKS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSLambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonSageMaker'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
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
    private function describeSavingsPlansOfferings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('searchResults'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('offeringId'),
                    new \PHPStan\Type\Constant\ConstantStringType('productTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('planType'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('paymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('durationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('currency'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fargate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('SageMaker'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('SageMaker'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('All Upfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partial Upfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('No Upfront'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceFamily'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
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
    private function returnSavingsPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('savingsPlanId'),
            ], [
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
}