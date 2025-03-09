<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TaxSettingsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\TaxSettings\TaxSettingsClient>
     */
    public function getClass(): string
    {
        return \Aws\TaxSettings\TaxSettingsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchDeleteTaxRegistration',
            'batchGetTaxExemptions',
            'batchPutTaxRegistration',
            'deleteSupplementalTaxRegistration',
            'deleteTaxRegistration',
            'getTaxExemptionTypes',
            'getTaxInheritance',
            'getTaxRegistration',
            'getTaxRegistrationDocument',
            'listSupplementalTaxRegistrations',
            'listTaxExemptions',
            'listTaxRegistrations',
            'putSupplementalTaxRegistration',
            'putTaxExemption',
            'putTaxInheritance',
            'putTaxRegistration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchDeleteTaxRegistration' => $this->batchDeleteTaxRegistration(),
            'batchGetTaxExemptions' => $this->batchGetTaxExemptions(),
            'batchPutTaxRegistration' => $this->batchPutTaxRegistration(),
            'deleteSupplementalTaxRegistration' => $this->deleteSupplementalTaxRegistration(),
            'deleteTaxRegistration' => $this->deleteTaxRegistration(),
            'getTaxExemptionTypes' => $this->getTaxExemptionTypes(),
            'getTaxInheritance' => $this->getTaxInheritance(),
            'getTaxRegistration' => $this->getTaxRegistration(),
            'getTaxRegistrationDocument' => $this->getTaxRegistrationDocument(),
            'listSupplementalTaxRegistrations' => $this->listSupplementalTaxRegistrations(),
            'listTaxExemptions' => $this->listTaxExemptions(),
            'listTaxRegistrations' => $this->listTaxRegistrations(),
            'putSupplementalTaxRegistration' => $this->putSupplementalTaxRegistration(),
            'putTaxExemption' => $this->putTaxExemption(),
            'putTaxInheritance' => $this->putTaxInheritance(),
            'putTaxRegistration' => $this->putTaxRegistration(),
        };
    }
    private function batchDeleteTaxRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetTaxExemptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('failedAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('taxExemptionDetailsMap'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('heritageObtainedDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('heritageObtainedParentEntity'),
                    new \PHPStan\Type\Constant\ConstantStringType('heritageObtainedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('taxExemptions'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authority'),
                        new \PHPStan\Type\Constant\ConstantStringType('effectiveDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemEffectiveDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('taxExemptionType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('country'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Valid'),
                            new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicableJurisdictions'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('country'),
                                new \PHPStan\Type\Constant\ConstantStringType('state'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ])),
            ]),
        ]);
    }
    private function batchPutTaxRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                ]),
            ]),
        ]);
    }
    private function deleteSupplementalTaxRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTaxRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getTaxExemptionTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taxExemptionTypes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applicableJurisdictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('country'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getTaxInheritance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('heritageStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OptIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptOut'),
                ]),
            ]),
        ]);
    }
    private function getTaxRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taxRegistration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalTaxInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('certifiedEmailId'),
                    new \PHPStan\Type\Constant\ConstantStringType('legalAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('legalName'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sector'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('taxDocumentMetadatas'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('brazilAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('canadaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('egyptAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('estoniaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('georgiaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('greeceAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('indiaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('israelAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('italyAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('kenyaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('malaysiaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('polandAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('romaniaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('saudiArabiaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('southKoreaAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('spainAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('turkeyAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ukraineAdditionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('vietnamAdditionalInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ccmCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('legalNatureCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('canadaQuebecSalesTaxNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('canadaRetailSalesTaxNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('isResellerAccount'),
                            new \PHPStan\Type\Constant\ConstantStringType('provincialSalesTaxId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uniqueIdentificationNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('uniqueIdentificationNumberExpirationDate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('registryCommercialCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('personType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Legal Person'),
                                new \PHPStan\Type\Constant\ConstantStringType('Physical Person'),
                                new \PHPStan\Type\Constant\ConstantStringType('Business'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contractingAuthorityCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pan'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('dealerType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Business'),
                                new \PHPStan\Type\Constant\ConstantStringType('Individual'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Authorized'),
                                new \PHPStan\Type\Constant\ConstantStringType('Non-authorized'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cigNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('cupNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('sdiAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('taxCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('personType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Legal Person'),
                                new \PHPStan\Type\Constant\ConstantStringType('Physical Person'),
                                new \PHPStan\Type\Constant\ConstantStringType('Business'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('businessRegistrationNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceTaxCodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('taxInformationNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Consultancy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Digital Service And Electronic Medium'),
                                new \PHPStan\Type\Constant\ConstantStringType('IT Services'),
                                new \PHPStan\Type\Constant\ConstantStringType('Training Or Coaching'),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('individualRegistrationNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('isGroupVatEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('taxRegistrationNumberType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TaxRegistrationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalRegistrationNumber'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('taxRegistrationNumberType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TaxRegistrationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('TaxIdentificationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('CommercialRegistrationNumber'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('businessRepresentativeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('itemOfBusiness'),
                            new \PHPStan\Type\Constant\ConstantStringType('lineOfBusiness'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('registrationType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Intra-EU'),
                                new \PHPStan\Type\Constant\ConstantStringType('Local'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('industries'),
                            new \PHPStan\Type\Constant\ConstantStringType('kepEmailId'),
                            new \PHPStan\Type\Constant\ConstantStringType('secondaryTaxId'),
                            new \PHPStan\Type\Constant\ConstantStringType('taxOffice'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CirculatingOrg'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProfessionalOrg'),
                                new \PHPStan\Type\Constant\ConstantStringType('Banks'),
                                new \PHPStan\Type\Constant\ConstantStringType('Insurance'),
                                new \PHPStan\Type\Constant\ConstantStringType('PensionAndBenefitFunds'),
                                new \PHPStan\Type\Constant\ConstantStringType('DevelopmentAgencies'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ukraineTrnType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Business'),
                                new \PHPStan\Type\Constant\ConstantStringType('Individual'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('electronicTransactionCodeNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('enterpriseIdentificationNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentVoucherNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('paymentVoucherNumberDate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addressLine1'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressLine2'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressLine3'),
                        new \PHPStan\Type\Constant\ConstantStringType('city'),
                        new \PHPStan\Type\Constant\ConstantStringType('countryCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('districtOrCounty'),
                        new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateOrRegion'),
                    ], [
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
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNPJ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NRIC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Business'),
                        new \PHPStan\Type\Constant\ConstantStringType('Individual'),
                        new \PHPStan\Type\Constant\ConstantStringType('Government'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taxDocumentAccessToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('taxDocumentName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getTaxRegistrationDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('destinationFilePath'),
                new \PHPStan\Type\Constant\ConstantStringType('presignedS3Url'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSupplementalTaxRegistrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('taxRegistrations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('legalName'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addressLine1'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressLine2'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressLine3'),
                        new \PHPStan\Type\Constant\ConstantStringType('city'),
                        new \PHPStan\Type\Constant\ConstantStringType('countryCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('districtOrCounty'),
                        new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateOrRegion'),
                    ], [
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
                    new \PHPStan\Type\Constant\ConstantStringType('VAT'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTaxExemptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('taxExemptionDetailsMap'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('heritageObtainedDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('heritageObtainedParentEntity'),
                    new \PHPStan\Type\Constant\ConstantStringType('heritageObtainedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('taxExemptions'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authority'),
                        new \PHPStan\Type\Constant\ConstantStringType('effectiveDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemEffectiveDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('taxExemptionType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('country'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Valid'),
                            new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicableJurisdictions'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('country'),
                                new \PHPStan\Type\Constant\ConstantStringType('state'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ])),
            ]),
        ]);
    }
    private function listTaxRegistrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountMetaData'),
                    new \PHPStan\Type\Constant\ConstantStringType('taxInheritanceDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taxRegistration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountName'),
                        new \PHPStan\Type\Constant\ConstantStringType('address'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressRoleMap'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressType'),
                        new \PHPStan\Type\Constant\ConstantStringType('seller'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('addressLine1'),
                            new \PHPStan\Type\Constant\ConstantStringType('addressLine2'),
                            new \PHPStan\Type\Constant\ConstantStringType('addressLine3'),
                            new \PHPStan\Type\Constant\ConstantStringType('city'),
                            new \PHPStan\Type\Constant\ConstantStringType('countryCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('districtOrCounty'),
                            new \PHPStan\Type\Constant\ConstantStringType('postalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('stateOrRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TaxAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('BillingAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactAddress'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('countryCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('stateOrRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TaxAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('BillingAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactAddress'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inheritanceObtainedReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('parentEntityId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalTaxInformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('certifiedEmailId'),
                        new \PHPStan\Type\Constant\ConstantStringType('jurisdiction'),
                        new \PHPStan\Type\Constant\ConstantStringType('legalName'),
                        new \PHPStan\Type\Constant\ConstantStringType('registrationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('registrationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('sector'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taxDocumentMetadatas'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('brazilAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('canadaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('egyptAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('estoniaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('georgiaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('greeceAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('indiaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('israelAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('italyAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('kenyaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('malaysiaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('polandAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('romaniaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('saudiArabiaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('southKoreaAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('spainAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('turkeyAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ukraineAdditionalInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('vietnamAdditionalInfo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ccmCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('legalNatureCode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('canadaQuebecSalesTaxNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('canadaRetailSalesTaxNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('isResellerAccount'),
                                new \PHPStan\Type\Constant\ConstantStringType('provincialSalesTaxId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('uniqueIdentificationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('uniqueIdentificationNumberExpirationDate'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('registryCommercialCode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('personType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Legal Person'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Physical Person'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Business'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contractingAuthorityCode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('pan'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('customerType'),
                                new \PHPStan\Type\Constant\ConstantStringType('dealerType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Business'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Individual'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Authorized'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Non-authorized'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cigNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('cupNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('sdiAccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('taxCode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('personType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Legal Person'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Physical Person'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Business'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('businessRegistrationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceTaxCodes'),
                                new \PHPStan\Type\Constant\ConstantStringType('taxInformationNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Consultancy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Digital Service And Electronic Medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IT Services'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Training Or Coaching'),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('individualRegistrationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('isGroupVatEnabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('taxRegistrationNumberType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TaxRegistrationNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalRegistrationNumber'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('taxRegistrationNumberType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TaxRegistrationNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TaxIdentificationNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CommercialRegistrationNumber'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('businessRepresentativeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('itemOfBusiness'),
                                new \PHPStan\Type\Constant\ConstantStringType('lineOfBusiness'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('registrationType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intra-EU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Local'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('industries'),
                                new \PHPStan\Type\Constant\ConstantStringType('kepEmailId'),
                                new \PHPStan\Type\Constant\ConstantStringType('secondaryTaxId'),
                                new \PHPStan\Type\Constant\ConstantStringType('taxOffice'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CirculatingOrg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfessionalOrg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Banks'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Insurance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PensionAndBenefitFunds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DevelopmentAgencies'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ukraineTrnType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Business'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Individual'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('electronicTransactionCodeNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('enterpriseIdentificationNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('paymentVoucherNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('paymentVoucherNumberDate'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('countryCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('stateOrRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('CNPJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('SST'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NRIC'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Business'),
                            new \PHPStan\Type\Constant\ConstantStringType('Individual'),
                            new \PHPStan\Type\Constant\ConstantStringType('Government'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('taxDocumentAccessToken'),
                            new \PHPStan\Type\Constant\ConstantStringType('taxDocumentName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putSupplementalTaxRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorityId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                ]),
            ]),
        ]);
    }
    private function putTaxExemption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('caseId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putTaxInheritance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putTaxRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                ]),
            ]),
        ]);
    }
}