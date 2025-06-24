<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class InvoicingClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Invoicing\InvoicingClient>
     */
    public function getClass(): string
    {
        return \Aws\Invoicing\InvoicingClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetInvoiceProfile',
            'createInvoiceUnit',
            'deleteInvoiceUnit',
            'getInvoiceUnit',
            'listInvoiceSummaries',
            'listInvoiceUnits',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateInvoiceUnit',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetInvoiceProfile' => $this->batchGetInvoiceProfile(),
            'createInvoiceUnit' => $this->createInvoiceUnit(),
            'deleteInvoiceUnit' => $this->deleteInvoiceUnit(),
            'getInvoiceUnit' => $this->getInvoiceUnit(),
            'listInvoiceSummaries' => $this->listInvoiceSummaries(),
            'listInvoiceUnits' => $this->listInvoiceUnits(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateInvoiceUnit' => $this->updateInvoiceUnit(),
        };
    }
    private function batchGetInvoiceProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiverName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiverAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiverEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaxRegistrationNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AddressLine1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressLine2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressLine3'),
                        new \PHPStan\Type\Constant\ConstantStringType('DistrictOrCounty'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateOrRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompanyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createInvoiceUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvoiceUnitArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteInvoiceUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvoiceUnitArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInvoiceUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvoiceUnitArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InvoiceReceiver'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('TaxInheritanceDisabled'),
                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LinkedAccounts'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listInvoiceSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvoiceSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvoiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IssuedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DueDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entity'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvoiceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginalInvoiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PurchaseOrderNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaseCurrencyAmount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaxCurrencyAmount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentCurrencyAmount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvoicingEntity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Month'),
                        new \PHPStan\Type\Constant\ConstantStringType('Year'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDIT_MEMO'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmountBeforeTax'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmountBreakdown'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyExchangeDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubTotalAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Discounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Taxes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fees'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetCurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmountBeforeTax'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmountBreakdown'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyExchangeDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubTotalAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Discounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Taxes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fees'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetCurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAmountBeforeTax'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmountBreakdown'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyExchangeDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubTotalAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Discounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Taxes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fees'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Breakdown'),
                                new \PHPStan\Type\Constant\ConstantStringType('TotalAmount'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetCurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rate'),
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
    private function listInvoiceUnits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvoiceUnits'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InvoiceUnitArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvoiceReceiver'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaxInheritanceDisabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LinkedAccounts'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateInvoiceUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvoiceUnitArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}