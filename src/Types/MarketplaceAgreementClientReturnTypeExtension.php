<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MarketplaceAgreementClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MarketplaceAgreement\MarketplaceAgreementClient>
     */
    public function getClass(): string
    {
        return \Aws\MarketplaceAgreement\MarketplaceAgreementClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'describeAgreement',
            'getAgreementTerms',
            'searchAgreements',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'describeAgreement' => $this->describeAgreement(),
            'getAgreementTerms' => $this->getAgreementTerms(),
            'searchAgreements' => $this->searchAgreements(),
        };
    }
    private function describeAgreement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('acceptanceTime'),
                new \PHPStan\Type\Constant\ConstantStringType('acceptor'),
                new \PHPStan\Type\Constant\ConstantStringType('agreementId'),
                new \PHPStan\Type\Constant\ConstantStringType('agreementType'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('estimatedCharges'),
                new \PHPStan\Type\Constant\ConstantStringType('proposalSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('proposer'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agreementValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('offerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RENEWED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLACED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                ]),
            ]),
        ]);
    }
    private function getAgreementTerms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('acceptedTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('byolPricingTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurableUpfrontPricingTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('fixedUpfrontPricingTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('freeTrialPricingTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('legalTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('paymentScheduleTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('recurringPaymentTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('renewalTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('supportTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageBasedPricingTerm'),
                        new \PHPStan\Type\Constant\ConstantStringType('validityTerm'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateCards'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('selectorValue'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('dimensionKey'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dimensionValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('constraints'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rateCard'),
                                    new \PHPStan\Type\Constant\ConstantStringType('selector'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('multipleDimensionSelection'),
                                        new \PHPStan\Type\Constant\ConstantStringType('quantityConfiguration'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('dimensionKey'),
                                            new \PHPStan\Type\Constant\ConstantStringType('price'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('duration'),
                            new \PHPStan\Type\Constant\ConstantStringType('grants'),
                            new \PHPStan\Type\Constant\ConstantStringType('price'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dimensionKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxQuantity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('duration'),
                            new \PHPStan\Type\Constant\ConstantStringType('grants'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dimensionKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxQuantity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('documents'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('chargeAmount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('chargeDate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('billingPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('price'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('enableAutoRenew'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('refundPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateCards'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('rateCard'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('dimensionKey'),
                                            new \PHPStan\Type\Constant\ConstantStringType('price'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agreementDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('agreementEndDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('agreementStartDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchAgreements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agreementViewSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('acceptanceTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('acceptor'),
                        new \PHPStan\Type\Constant\ConstantStringType('agreementId'),
                        new \PHPStan\Type\Constant\ConstantStringType('agreementType'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('proposalSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('proposer'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('offerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RENEWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLACED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPERSEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}