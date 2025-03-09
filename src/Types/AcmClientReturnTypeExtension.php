<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AcmClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Acm\AcmClient>
     */
    public function getClass(): string
    {
        return \Aws\Acm\AcmClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTagsToCertificate',
            'deleteCertificate',
            'describeCertificate',
            'exportCertificate',
            'getAccountConfiguration',
            'getCertificate',
            'importCertificate',
            'listCertificates',
            'listTagsForCertificate',
            'putAccountConfiguration',
            'removeTagsFromCertificate',
            'renewCertificate',
            'requestCertificate',
            'resendValidationEmail',
            'updateCertificateOptions',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTagsToCertificate' => $this->addTagsToCertificate(),
            'deleteCertificate' => $this->deleteCertificate(),
            'describeCertificate' => $this->describeCertificate(),
            'exportCertificate' => $this->exportCertificate(),
            'getAccountConfiguration' => $this->getAccountConfiguration(),
            'getCertificate' => $this->getCertificate(),
            'importCertificate' => $this->importCertificate(),
            'listCertificates' => $this->listCertificates(),
            'listTagsForCertificate' => $this->listTagsForCertificate(),
            'putAccountConfiguration' => $this->putAccountConfiguration(),
            'removeTagsFromCertificate' => $this->removeTagsFromCertificate(),
            'renewCertificate' => $this->renewCertificate(),
            'requestCertificate' => $this->requestCertificate(),
            'resendValidationEmail' => $this->resendValidationEmail(),
            'updateCertificateOptions' => $this->updateCertificateOptions(),
        };
    }
    private function addTagsToCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubjectAlternativeNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainValidationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Serial'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IssuedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevokedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevocationReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotBefore'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotAfter'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('SignatureAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('InUseBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('RenewalSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyUsages'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExtendedKeyUsages'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RenewalEligibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationEmails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceRecord'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationMethod'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DNS'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ISSUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_COMPROMISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA_COMPROMISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFFILIATION_CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPERCEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CESSATION_OF_OPERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_HOLD'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVE_FROM_CRL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVILEGE_WITHDRAWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('A_A_COMPROMISE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_1024'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC_prime256v1'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC_secp384r1'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC_secp521r1'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NO_AVAILABLE_CONTACTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_VERIFICATION_REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_NOT_ALLOWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_PUBLIC_DOMAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_VALIDATION_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_REQUEST_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_NAME_CONSTRAINTS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_ARGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_DURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PCA_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SLR_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_ISSUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RenewalStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainValidationOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('RenewalStatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTO_RENEWAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationEmails'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationDomain'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceRecord'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationMethod'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DNS'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_AVAILABLE_CONTACTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDITIONAL_VERIFICATION_REQUIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_NOT_ALLOWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_PUBLIC_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_VALIDATION_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAA_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_REQUEST_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_NAME_CONSTRAINTS_VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_ARGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_INVALID_DURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PCA_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLR_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_SIGNATURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NON_REPUDIATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_ENCIPHERMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATA_ENCIPHERMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_AGREEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CRL_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENCIPHER_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DECIPHER_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('OID'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_WEB_SERVER_AUTHENTICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_WEB_CLIENT_AUTHENTICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL_PROTECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPSEC_END_SYSTEM'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPSEC_TUNNEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPSEC_USER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INELIGIBLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateTransparencyLoggingPreference'),
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
    private function exportCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                new \PHPStan\Type\Constant\ConstantStringType('CertificateChain'),
                new \PHPStan\Type\Constant\ConstantStringType('PrivateKey'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExpiryEvents'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DaysBeforeExpiry'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                new \PHPStan\Type\Constant\ConstantStringType('CertificateChain'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CertificateSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubjectAlternativeNameSummaries'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAdditionalSubjectAlternativeNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsages'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendedKeyUsages'),
                        new \PHPStan\Type\Constant\ConstantStringType('InUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exported'),
                        new \PHPStan\Type\Constant\ConstantStringType('RenewalEligibility'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotBefore'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotAfter'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssuedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImportedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevokedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ISSUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_TIMED_OUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_ISSUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_1024'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC_prime256v1'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC_secp384r1'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC_secp521r1'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_SIGNATURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NON_REPUDIATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_ENCIPHERMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATA_ENCIPHERMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_AGREEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CRL_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENCIPHER_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DECIPHER_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_WEB_SERVER_AUTHENTICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_WEB_CLIENT_AUTHENTICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL_PROTECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPSEC_END_SYSTEM'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPSEC_TUNNEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPSEC_USER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INELIGIBLE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForCertificate(): ?\PHPStan\Type\Type
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
    private function putAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeTagsFromCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function renewCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function requestCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resendValidationEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCertificateOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}