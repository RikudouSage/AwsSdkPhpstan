<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class PcaConnectorAdClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\PcaConnectorAd\PcaConnectorAdClient>
     */
    public function getClass(): string
    {
        return \Aws\PcaConnectorAd\PcaConnectorAdClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createConnector',
            'createDirectoryRegistration',
            'createServicePrincipalName',
            'createTemplate',
            'createTemplateGroupAccessControlEntry',
            'deleteConnector',
            'deleteDirectoryRegistration',
            'deleteServicePrincipalName',
            'deleteTemplate',
            'deleteTemplateGroupAccessControlEntry',
            'getConnector',
            'getDirectoryRegistration',
            'getServicePrincipalName',
            'getTemplate',
            'getTemplateGroupAccessControlEntry',
            'listConnectors',
            'listDirectoryRegistrations',
            'listServicePrincipalNames',
            'listTagsForResource',
            'listTemplateGroupAccessControlEntries',
            'listTemplates',
            'tagResource',
            'untagResource',
            'updateTemplate',
            'updateTemplateGroupAccessControlEntry',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createConnector' => $this->createConnector(),
            'createDirectoryRegistration' => $this->createDirectoryRegistration(),
            'createServicePrincipalName' => $this->createServicePrincipalName(),
            'createTemplate' => $this->createTemplate(),
            'createTemplateGroupAccessControlEntry' => $this->createTemplateGroupAccessControlEntry(),
            'deleteConnector' => $this->deleteConnector(),
            'deleteDirectoryRegistration' => $this->deleteDirectoryRegistration(),
            'deleteServicePrincipalName' => $this->deleteServicePrincipalName(),
            'deleteTemplate' => $this->deleteTemplate(),
            'deleteTemplateGroupAccessControlEntry' => $this->deleteTemplateGroupAccessControlEntry(),
            'getConnector' => $this->getConnector(),
            'getDirectoryRegistration' => $this->getDirectoryRegistration(),
            'getServicePrincipalName' => $this->getServicePrincipalName(),
            'getTemplate' => $this->getTemplate(),
            'getTemplateGroupAccessControlEntry' => $this->getTemplateGroupAccessControlEntry(),
            'listConnectors' => $this->listConnectors(),
            'listDirectoryRegistrations' => $this->listDirectoryRegistrations(),
            'listServicePrincipalNames' => $this->listServicePrincipalNames(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTemplateGroupAccessControlEntries' => $this->listTemplateGroupAccessControlEntries(),
            'listTemplates' => $this->listTemplates(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateTemplate' => $this->updateTemplate(),
            'updateTemplateGroupAccessControlEntry' => $this->updateTemplateGroupAccessControlEntry(),
        };
    }
    private function createConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDirectoryRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryRegistrationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createServicePrincipalName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTemplateGroupAccessControlEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDirectoryRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteServicePrincipalName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTemplateGroupAccessControlEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateEnrollmentPolicyServerEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInformation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATECA_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATECA_RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_NOT_IN_VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_RESOURCE_NOT_FOUND'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDirectoryRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryRegistration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_REACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_TYPE_NOT_SUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getServicePrincipalName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipalName'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryRegistrationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_REACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPN_EXISTS_ON_DIFFERENT_AD_OBJECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Template'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateV3'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateV4'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateValidity'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnrollmentFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('Extensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneralFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectNameFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SupersededTemplates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidityPeriod'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnableKeyReuseOnNtTokenKeysetStorageFull'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSymmetricAlgorithms'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoSecurityExtension'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoveInvalidCertificateFromPersonalStore'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserInteractionRequired'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL_APPLICATION_POLICIES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ANY_PURPOSE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ATTESTATION_IDENTITY_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_REQUEST_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CTL_USAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_RIGHTS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_SERVICE_EMAIL_REPLICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_LIST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DNS_SERVER_TRUST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_CODE_GENERATOR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EARLY_LAUNCH_ANTIMALWARE_DRIVER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EMBEDDED_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCLAVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTING_FILE_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDORSEMENT_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FILE_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HAL_EXTENSION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_END_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_IKE_INTERMEDIATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_TUNNEL_TERMINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_USER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED_USER_MODE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KDC_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KERNEL_MODE_CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_PACK_LICENSES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_SERVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LIFETIME_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_PUBLISHER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TRUST_LIST_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OEM_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREVIEW_BUILD_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY_ARCHIVAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_LIGHT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('QUALIFIED_SUBORDINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_CA_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_END_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_NO_OSCP_FAILOVER_TO_CRL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SECURE_EMAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SMART_CARD_LOGIN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_ENCRYPTED_DIGEST_RETRY_COUNT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_RELAXED_PE_MARKER_CHECK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_ATTESTED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_EXTENDED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HELLO_RECOVERY_KEY_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_KITS_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_RT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SOFTWARE_EXTENSION_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_TCB_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_THIRD_PARTY_APPLICATION_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_UPDATE'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageFlags'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnrollment'),
                                new \PHPStan\Type\Constant\ConstantStringType('MachineType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CryptoProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimalKeyLength'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_EXCHANGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExportableKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('StrongKeyProtectionRequired'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2003'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequireCommonName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDirectoryPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDnsAsCn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDirectoryGuid'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDomainDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireSpn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireUpn'),
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
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateValidity'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnrollmentFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('Extensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneralFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('HashAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectNameFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SupersededTemplates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidityPeriod'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnableKeyReuseOnNtTokenKeysetStorageFull'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSymmetricAlgorithms'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoSecurityExtension'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoveInvalidCertificateFromPersonalStore'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserInteractionRequired'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL_APPLICATION_POLICIES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ANY_PURPOSE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ATTESTATION_IDENTITY_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_REQUEST_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CTL_USAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_RIGHTS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_SERVICE_EMAIL_REPLICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_LIST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DNS_SERVER_TRUST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_CODE_GENERATOR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EARLY_LAUNCH_ANTIMALWARE_DRIVER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EMBEDDED_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCLAVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTING_FILE_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDORSEMENT_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FILE_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HAL_EXTENSION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_END_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_IKE_INTERMEDIATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_TUNNEL_TERMINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_USER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED_USER_MODE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KDC_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KERNEL_MODE_CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_PACK_LICENSES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_SERVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LIFETIME_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_PUBLISHER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TRUST_LIST_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OEM_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREVIEW_BUILD_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY_ARCHIVAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_LIGHT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('QUALIFIED_SUBORDINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_CA_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_END_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_NO_OSCP_FAILOVER_TO_CRL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SECURE_EMAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SMART_CARD_LOGIN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_ENCRYPTED_DIGEST_RETRY_COUNT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_RELAXED_PE_MARKER_CHECK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_ATTESTED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_EXTENDED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HELLO_RECOVERY_KEY_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_KITS_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_RT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SOFTWARE_EXTENSION_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_TCB_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_THIRD_PARTY_APPLICATION_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_UPDATE'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageFlags'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnrollment'),
                                new \PHPStan\Type\Constant\ConstantStringType('MachineType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA384'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA512'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('CryptoProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsageProperty'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimalKeyLength'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P384'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P521'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_EXCHANGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyFlags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExportableKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireAlternateSignatureAlgorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('StrongKeyProtectionRequired'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequireCommonName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDirectoryPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDnsAsCn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDirectoryGuid'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDomainDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireSpn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireUpn'),
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
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateValidity'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnrollmentFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('Extensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneralFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('HashAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectNameFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SupersededTemplates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidityPeriod'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnableKeyReuseOnNtTokenKeysetStorageFull'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSymmetricAlgorithms'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoSecurityExtension'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoveInvalidCertificateFromPersonalStore'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserInteractionRequired'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL_APPLICATION_POLICIES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ANY_PURPOSE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ATTESTATION_IDENTITY_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_REQUEST_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CTL_USAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_RIGHTS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_SERVICE_EMAIL_REPLICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_LIST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DNS_SERVER_TRUST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_CODE_GENERATOR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EARLY_LAUNCH_ANTIMALWARE_DRIVER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EMBEDDED_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCLAVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTING_FILE_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDORSEMENT_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FILE_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HAL_EXTENSION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_END_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_IKE_INTERMEDIATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_TUNNEL_TERMINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_USER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED_USER_MODE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KDC_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KERNEL_MODE_CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_PACK_LICENSES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_SERVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LIFETIME_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_PUBLISHER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TRUST_LIST_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OEM_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREVIEW_BUILD_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY_ARCHIVAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_LIGHT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('QUALIFIED_SUBORDINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_CA_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_END_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_NO_OSCP_FAILOVER_TO_CRL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SECURE_EMAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SMART_CARD_LOGIN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_ENCRYPTED_DIGEST_RETRY_COUNT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_RELAXED_PE_MARKER_CHECK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_ATTESTED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_EXTENDED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HELLO_RECOVERY_KEY_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_KITS_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_RT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SOFTWARE_EXTENSION_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_TCB_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_THIRD_PARTY_APPLICATION_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_UPDATE'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageFlags'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnrollment'),
                                new \PHPStan\Type\Constant\ConstantStringType('MachineType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA384'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA512'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('CryptoProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsageProperty'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimalKeyLength'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P384'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P521'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_EXCHANGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyFlags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExportableKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireAlternateSignatureAlgorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireSameKeyRenewal'),
                                new \PHPStan\Type\Constant\ConstantStringType('StrongKeyProtectionRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('UseLegacyProvider'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequireCommonName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDirectoryPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDnsAsCn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDirectoryGuid'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDomainDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireSpn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireUpn'),
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
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MajorRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinorRevision'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getTemplateGroupAccessControlEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessControlEntry'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessRights'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupSecurityIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoEnroll'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enroll'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connectors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateEnrollmentPolicyServerEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInformation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATECA_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATECA_RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_NOT_IN_VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_RESOURCE_NOT_FOUND'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDirectoryRegistrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryRegistrations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_REACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_TYPE_NOT_SUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServicePrincipalNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipalNames'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryRegistrationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_REACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPN_EXISTS_ON_DIFFERENT_AD_OBJECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTemplateGroupAccessControlEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessControlEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessRights'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupSecurityIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoEnroll'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enroll'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Templates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateV3'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemplateV4'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateValidity'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnrollmentFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('Extensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneralFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectNameFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SupersededTemplates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidityPeriod'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnableKeyReuseOnNtTokenKeysetStorageFull'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSymmetricAlgorithms'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoSecurityExtension'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoveInvalidCertificateFromPersonalStore'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserInteractionRequired'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL_APPLICATION_POLICIES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ANY_PURPOSE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ATTESTATION_IDENTITY_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_REQUEST_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CTL_USAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_RIGHTS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_SERVICE_EMAIL_REPLICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_LIST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DNS_SERVER_TRUST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_CODE_GENERATOR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EARLY_LAUNCH_ANTIMALWARE_DRIVER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EMBEDDED_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCLAVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTING_FILE_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDORSEMENT_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FILE_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HAL_EXTENSION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_END_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_IKE_INTERMEDIATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_TUNNEL_TERMINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_USER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED_USER_MODE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KDC_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KERNEL_MODE_CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_PACK_LICENSES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_SERVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LIFETIME_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_PUBLISHER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TRUST_LIST_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OEM_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREVIEW_BUILD_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY_ARCHIVAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_LIGHT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('QUALIFIED_SUBORDINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_CA_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_END_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_NO_OSCP_FAILOVER_TO_CRL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SECURE_EMAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SMART_CARD_LOGIN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_ENCRYPTED_DIGEST_RETRY_COUNT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_RELAXED_PE_MARKER_CHECK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_ATTESTED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_EXTENDED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HELLO_RECOVERY_KEY_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_KITS_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_RT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SOFTWARE_EXTENSION_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_TCB_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_THIRD_PARTY_APPLICATION_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_UPDATE'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageFlags'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnrollment'),
                                new \PHPStan\Type\Constant\ConstantStringType('MachineType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CryptoProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimalKeyLength'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_EXCHANGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExportableKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('StrongKeyProtectionRequired'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2003'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequireCommonName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDirectoryPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDnsAsCn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDirectoryGuid'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDomainDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireSpn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireUpn'),
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
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateValidity'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnrollmentFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('Extensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneralFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('HashAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectNameFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SupersededTemplates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidityPeriod'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnableKeyReuseOnNtTokenKeysetStorageFull'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSymmetricAlgorithms'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoSecurityExtension'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoveInvalidCertificateFromPersonalStore'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserInteractionRequired'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL_APPLICATION_POLICIES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ANY_PURPOSE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ATTESTATION_IDENTITY_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_REQUEST_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CTL_USAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_RIGHTS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_SERVICE_EMAIL_REPLICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_LIST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DNS_SERVER_TRUST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_CODE_GENERATOR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EARLY_LAUNCH_ANTIMALWARE_DRIVER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EMBEDDED_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCLAVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTING_FILE_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDORSEMENT_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FILE_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HAL_EXTENSION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_END_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_IKE_INTERMEDIATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_TUNNEL_TERMINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_USER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED_USER_MODE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KDC_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KERNEL_MODE_CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_PACK_LICENSES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_SERVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LIFETIME_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_PUBLISHER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TRUST_LIST_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OEM_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREVIEW_BUILD_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY_ARCHIVAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_LIGHT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('QUALIFIED_SUBORDINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_CA_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_END_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_NO_OSCP_FAILOVER_TO_CRL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SECURE_EMAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SMART_CARD_LOGIN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_ENCRYPTED_DIGEST_RETRY_COUNT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_RELAXED_PE_MARKER_CHECK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_ATTESTED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_EXTENDED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HELLO_RECOVERY_KEY_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_KITS_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_RT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SOFTWARE_EXTENSION_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_TCB_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_THIRD_PARTY_APPLICATION_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_UPDATE'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageFlags'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnrollment'),
                                new \PHPStan\Type\Constant\ConstantStringType('MachineType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA384'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA512'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('CryptoProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsageProperty'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimalKeyLength'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P384'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P521'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_EXCHANGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyFlags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExportableKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireAlternateSignatureAlgorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('StrongKeyProtectionRequired'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2008_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequireCommonName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDirectoryPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDnsAsCn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDirectoryGuid'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDomainDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireSpn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireUpn'),
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
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateValidity'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnrollmentFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('Extensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneralFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('HashAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectNameFlags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SupersededTemplates'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidityPeriod'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeriodType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnableKeyReuseOnNtTokenKeysetStorageFull'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSymmetricAlgorithms'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoSecurityExtension'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoveInvalidCertificateFromPersonalStore'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserInteractionRequired'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyObjectIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL_APPLICATION_POLICIES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ANY_PURPOSE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ATTESTATION_IDENTITY_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_REQUEST_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CTL_USAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIGITAL_RIGHTS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_SERVICE_EMAIL_REPLICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_LIST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DNS_SERVER_TRUST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC_CODE_GENERATOR'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EARLY_LAUNCH_ANTIMALWARE_DRIVER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EMBEDDED_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCLAVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTING_FILE_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDORSEMENT_KEY_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FILE_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HAL_EXTENSION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_END_SYSTEM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_IKE_INTERMEDIATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_TUNNEL_TERMINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IP_SECURITY_USER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ISOLATED_USER_MODE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KDC_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KERNEL_MODE_CODE_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_PACK_LICENSES'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_RECOVERY_AGENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_SERVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LIFETIME_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_PUBLISHER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TRUST_LIST_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OCSP_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OEM_WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PLATFORM_CERTIFICATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PREVIEW_BUILD_SIGNING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY_ARCHIVAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_LIGHT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_PROCESS_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('QUALIFIED_SUBORDINATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_CA_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_AUTO_UPDATE_END_REVOCATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_PROGRAM_NO_OSCP_FAILOVER_TO_CRL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROOT_LIST_SIGNER'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SECURE_EMAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_AUTHENTICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SMART_CARD_LOGIN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_ENCRYPTED_DIGEST_RETRY_COUNT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPC_RELAXED_PE_MARKER_CHECK'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TIME_STAMPING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_ATTESTED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_EXTENDED_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HARDWARE_DRIVER_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_HELLO_RECOVERY_KEY_ENCRYPTION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_KITS_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_RT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SOFTWARE_EXTENSION_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SYSTEM_COMPONENT_VERIFICATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_TCB_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_THIRD_PARTY_APPLICATION_COMPONENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_UPDATE'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageFlags'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DigitalSignature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyEncipherment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonRepudiation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoEnrollment'),
                                new \PHPStan\Type\Constant\ConstantStringType('MachineType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA384'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA512'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('CryptoProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsageProperty'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimalKeyLength'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P384'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECDH_P521'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_EXCHANGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyFlags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PropertyType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyAgreement'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExportableKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireAlternateSignatureAlgorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireSameKeyRenewal'),
                                new \PHPStan\Type\Constant\ConstantStringType('StrongKeyProtectionRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('UseLegacyProvider'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2012_R2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequireCommonName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDirectoryPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireDnsAsCn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDirectoryGuid'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireDomainDns'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireSpn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SanRequireUpn'),
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
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MajorRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinorRevision'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateTemplateGroupAccessControlEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}