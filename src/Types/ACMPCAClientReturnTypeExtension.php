<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ACMPCAClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ACMPCA\ACMPCAClient>
     */
    public function getClass(): string
    {
        return \Aws\ACMPCA\ACMPCAClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCertificateAuthority',
            'createCertificateAuthorityAuditReport',
            'createPermission',
            'deleteCertificateAuthority',
            'deletePermission',
            'deletePolicy',
            'describeCertificateAuthority',
            'describeCertificateAuthorityAuditReport',
            'getCertificate',
            'getCertificateAuthorityCertificate',
            'getCertificateAuthorityCsr',
            'getPolicy',
            'importCertificateAuthorityCertificate',
            'issueCertificate',
            'listCertificateAuthorities',
            'listPermissions',
            'listTags',
            'putPolicy',
            'restoreCertificateAuthority',
            'revokeCertificate',
            'tagCertificateAuthority',
            'untagCertificateAuthority',
            'updateCertificateAuthority',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCertificateAuthority' => $this->createCertificateAuthority(),
            'createCertificateAuthorityAuditReport' => $this->createCertificateAuthorityAuditReport(),
            'createPermission' => $this->createPermission(),
            'deleteCertificateAuthority' => $this->deleteCertificateAuthority(),
            'deletePermission' => $this->deletePermission(),
            'deletePolicy' => $this->deletePolicy(),
            'describeCertificateAuthority' => $this->describeCertificateAuthority(),
            'describeCertificateAuthorityAuditReport' => $this->describeCertificateAuthorityAuditReport(),
            'getCertificate' => $this->getCertificate(),
            'getCertificateAuthorityCertificate' => $this->getCertificateAuthorityCertificate(),
            'getCertificateAuthorityCsr' => $this->getCertificateAuthorityCsr(),
            'getPolicy' => $this->getPolicy(),
            'importCertificateAuthorityCertificate' => $this->importCertificateAuthorityCertificate(),
            'issueCertificate' => $this->issueCertificate(),
            'listCertificateAuthorities' => $this->listCertificateAuthorities(),
            'listPermissions' => $this->listPermissions(),
            'listTags' => $this->listTags(),
            'putPolicy' => $this->putPolicy(),
            'restoreCertificateAuthority' => $this->restoreCertificateAuthority(),
            'revokeCertificate' => $this->revokeCertificate(),
            'tagCertificateAuthority' => $this->tagCertificateAuthority(),
            'untagCertificateAuthority' => $this->untagCertificateAuthority(),
            'updateCertificateAuthority' => $this->updateCertificateAuthority(),
        };
    }
    private function createCertificateAuthority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCertificateAuthorityAuditReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuditReportId'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCertificateAuthority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeCertificateAuthority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthority'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastStateChangeAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Serial'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotBefore'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotAfter'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevocationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestorableUntil'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyStorageSecurityStandard'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBORDINATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_ALGORITHM'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                        new \PHPStan\Type\Constant\ConstantStringType('CsrExtensions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC_prime256v1'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC_secp384r1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256WITHECDSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA384WITHECDSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA512WITHECDSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256WITHRSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA384WITHRSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA512WITHRSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SM3WITHSM2'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnit'),
                            new \PHPStan\Type\Constant\ConstantStringType('DistinguishedNameQualifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('CommonName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                            new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Initials'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pseudonym'),
                            new \PHPStan\Type\Constant\ConstantStringType('GenerationQualifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomAttributes'),
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectInformationAccess'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyCertSign'),
                                new \PHPStan\Type\Constant\ConstantStringType('CRLSign'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncipherOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('DecipherOnly'),
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
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessMethod'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessLocation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CustomObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AccessMethodType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CA_REPOSITORY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_PKI_MANIFEST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_PKI_NOTIFY'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OtherName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Rfc822Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EdiPartyName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UniformResourceIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredId'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TypeId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DistinguishedNameQualifier'),
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CommonName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                                            new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Initials'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Pseudonym'),
                                            new \PHPStan\Type\Constant\ConstantStringType('GenerationQualifier'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomAttributes'),
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
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PartyName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NameAssigner'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CrlConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('OcspConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpirationInDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomCname'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3ObjectAcl'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrlDistributionPointExtensionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrlType'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPath'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_READ'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUCKET_OWNER_FULL_CONTROL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OmitExtension'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PARTITIONED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('OcspCustomCname'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS_140_2_LEVEL_2_OR_HIGHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS_140_2_LEVEL_3_OR_HIGHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CCPC_LEVEL_1_OR_HIGHER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GENERAL_PURPOSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_LIVED_CERTIFICATE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeCertificateAuthorityAuditReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuditReportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function getCertificateAuthorityCertificate(): ?\PHPStan\Type\Type
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
    private function getCertificateAuthorityCsr(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Csr'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importCertificateAuthorityCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function issueCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCertificateAuthorities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorities'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastStateChangeAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Serial'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotBefore'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotAfter'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevocationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestorableUntil'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyStorageSecurityStandard'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsageMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBORDINATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_TIMED_OUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_ALGORITHM'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                            new \PHPStan\Type\Constant\ConstantStringType('CsrExtensions'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                                new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC_prime256v1'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC_secp384r1'),
                                new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256WITHECDSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA384WITHECDSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA512WITHECDSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256WITHRSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA384WITHRSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA512WITHRSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SM3WITHSM2'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('DistinguishedNameQualifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('CommonName'),
                                new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                                new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                                new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Initials'),
                                new \PHPStan\Type\Constant\ConstantStringType('Pseudonym'),
                                new \PHPStan\Type\Constant\ConstantStringType('GenerationQualifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomAttributes'),
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
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubjectInformationAccess'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyCertSign'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CRLSign'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EncipherOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DecipherOnly'),
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
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AccessMethod'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AccessLocation'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomObjectIdentifier'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AccessMethodType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_REPOSITORY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_PKI_MANIFEST'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_PKI_NOTIFY'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('OtherName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Rfc822Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EdiPartyName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UniformResourceIdentifier'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RegisteredId'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TypeId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                                new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnit'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DistinguishedNameQualifier'),
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CommonName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Initials'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Pseudonym'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GenerationQualifier'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CustomAttributes'),
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
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PartyName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NameAssigner'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CrlConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('OcspConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpirationInDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomCname'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ObjectAcl'),
                                new \PHPStan\Type\Constant\ConstantStringType('CrlDistributionPointExtensionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CrlType'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPath'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_READ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUCKET_OWNER_FULL_CONTROL'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OmitExtension'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARTITIONED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('OcspCustomCname'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FIPS_140_2_LEVEL_2_OR_HIGHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIPS_140_2_LEVEL_3_OR_HIGHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CCPC_LEVEL_1_OR_HIGHER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GENERAL_PURPOSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHORT_LIVED_CERTIFICATE'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IssueCertificate'),
                                new \PHPStan\Type\Constant\ConstantStringType('GetCertificate'),
                                new \PHPStan\Type\Constant\ConstantStringType('ListPermissions'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function putPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function restoreCertificateAuthority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function revokeCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagCertificateAuthority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagCertificateAuthority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCertificateAuthority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}