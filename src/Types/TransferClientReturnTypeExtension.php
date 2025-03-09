<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TransferClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Transfer\TransferClient>
     */
    public function getClass(): string
    {
        return \Aws\Transfer\TransferClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAccess',
            'createAgreement',
            'createConnector',
            'createProfile',
            'createServer',
            'createUser',
            'createWebApp',
            'createWorkflow',
            'deleteAccess',
            'deleteAgreement',
            'deleteCertificate',
            'deleteConnector',
            'deleteHostKey',
            'deleteProfile',
            'deleteServer',
            'deleteSshPublicKey',
            'deleteUser',
            'deleteWebApp',
            'deleteWebAppCustomization',
            'deleteWorkflow',
            'describeAccess',
            'describeAgreement',
            'describeCertificate',
            'describeConnector',
            'describeExecution',
            'describeHostKey',
            'describeProfile',
            'describeSecurityPolicy',
            'describeServer',
            'describeUser',
            'describeWebApp',
            'describeWebAppCustomization',
            'describeWorkflow',
            'importCertificate',
            'importHostKey',
            'importSshPublicKey',
            'listAccesses',
            'listAgreements',
            'listCertificates',
            'listConnectors',
            'listExecutions',
            'listFileTransferResults',
            'listHostKeys',
            'listProfiles',
            'listSecurityPolicies',
            'listServers',
            'listTagsForResource',
            'listUsers',
            'listWebApps',
            'listWorkflows',
            'sendWorkflowStepState',
            'startDirectoryListing',
            'startFileTransfer',
            'startServer',
            'stopServer',
            'tagResource',
            'testConnection',
            'testIdentityProvider',
            'untagResource',
            'updateAccess',
            'updateAgreement',
            'updateCertificate',
            'updateConnector',
            'updateHostKey',
            'updateProfile',
            'updateServer',
            'updateUser',
            'updateWebApp',
            'updateWebAppCustomization',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAccess' => $this->createAccess(),
            'createAgreement' => $this->createAgreement(),
            'createConnector' => $this->createConnector(),
            'createProfile' => $this->createProfile(),
            'createServer' => $this->createServer(),
            'createUser' => $this->createUser(),
            'createWebApp' => $this->createWebApp(),
            'createWorkflow' => $this->createWorkflow(),
            'deleteAccess' => $this->deleteAccess(),
            'deleteAgreement' => $this->deleteAgreement(),
            'deleteCertificate' => $this->deleteCertificate(),
            'deleteConnector' => $this->deleteConnector(),
            'deleteHostKey' => $this->deleteHostKey(),
            'deleteProfile' => $this->deleteProfile(),
            'deleteServer' => $this->deleteServer(),
            'deleteSshPublicKey' => $this->deleteSshPublicKey(),
            'deleteUser' => $this->deleteUser(),
            'deleteWebApp' => $this->deleteWebApp(),
            'deleteWebAppCustomization' => $this->deleteWebAppCustomization(),
            'deleteWorkflow' => $this->deleteWorkflow(),
            'describeAccess' => $this->describeAccess(),
            'describeAgreement' => $this->describeAgreement(),
            'describeCertificate' => $this->describeCertificate(),
            'describeConnector' => $this->describeConnector(),
            'describeExecution' => $this->describeExecution(),
            'describeHostKey' => $this->describeHostKey(),
            'describeProfile' => $this->describeProfile(),
            'describeSecurityPolicy' => $this->describeSecurityPolicy(),
            'describeServer' => $this->describeServer(),
            'describeUser' => $this->describeUser(),
            'describeWebApp' => $this->describeWebApp(),
            'describeWebAppCustomization' => $this->describeWebAppCustomization(),
            'describeWorkflow' => $this->describeWorkflow(),
            'importCertificate' => $this->importCertificate(),
            'importHostKey' => $this->importHostKey(),
            'importSshPublicKey' => $this->importSshPublicKey(),
            'listAccesses' => $this->listAccesses(),
            'listAgreements' => $this->listAgreements(),
            'listCertificates' => $this->listCertificates(),
            'listConnectors' => $this->listConnectors(),
            'listExecutions' => $this->listExecutions(),
            'listFileTransferResults' => $this->listFileTransferResults(),
            'listHostKeys' => $this->listHostKeys(),
            'listProfiles' => $this->listProfiles(),
            'listSecurityPolicies' => $this->listSecurityPolicies(),
            'listServers' => $this->listServers(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listUsers' => $this->listUsers(),
            'listWebApps' => $this->listWebApps(),
            'listWorkflows' => $this->listWorkflows(),
            'sendWorkflowStepState' => $this->sendWorkflowStepState(),
            'startDirectoryListing' => $this->startDirectoryListing(),
            'startFileTransfer' => $this->startFileTransfer(),
            'startServer' => $this->startServer(),
            'stopServer' => $this->stopServer(),
            'tagResource' => $this->tagResource(),
            'testConnection' => $this->testConnection(),
            'testIdentityProvider' => $this->testIdentityProvider(),
            'untagResource' => $this->untagResource(),
            'updateAccess' => $this->updateAccess(),
            'updateAgreement' => $this->updateAgreement(),
            'updateCertificate' => $this->updateCertificate(),
            'updateConnector' => $this->updateConnector(),
            'updateHostKey' => $this->updateHostKey(),
            'updateProfile' => $this->updateProfile(),
            'updateServer' => $this->updateServer(),
            'updateUser' => $this->updateUser(),
            'updateWebApp' => $this->updateWebApp(),
            'updateWebAppCustomization' => $this->updateWebAppCustomization(),
        };
    }
    private function createAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAgreement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgreementId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectorId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWebApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebAppId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAgreement(): ?\PHPStan\Type\Type
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
    private function deleteConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteHostKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSshPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWebApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWebAppCustomization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('Access'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectoryMappings'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('PosixProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Entry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PATH'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOGICAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecondaryGids'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAgreement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Agreement'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgreementId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartnerProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaseDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreserveFilename'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnforceMessageSigning'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDirectories'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailedFilesDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('MdnFilesDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('PayloadFilesDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusFilesDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('TemporaryFilesDirectory'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Usage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateChain'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('InactiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Serial'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotBeforeDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotAfterDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ROTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_WITH_PRIVATE_KEY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('As2Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SftpConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceManagedEgressIpAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocalProfileId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartnerProfileId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageSubject'),
                        new \PHPStan\Type\Constant\ConstantStringType('Compression'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('MdnSigningAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('MdnResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('BasicAuthSecretId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreserveContentType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ZLIB'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES128_CBC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES192_CBC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES256_CBC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DES_EDE3_CBC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA384'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA512'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA384'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA512'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UserSecretId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedHostKeys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                new \PHPStan\Type\Constant\ConstantStringType('Execution'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitialFileLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PosixProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Results'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3FileLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EfsFileLocation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Etag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UserDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecondaryGids'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('HANDLING_EXCEPTION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnExceptionSteps'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StepType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                new \PHPStan\Type\Constant\ConstantStringType('TAG'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DECRYPT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PERMISSION_DENIED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_STEP_FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALREADY_EXISTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StepType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                new \PHPStan\Type\Constant\ConstantStringType('TAG'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DECRYPT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PERMISSION_DENIED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_STEP_FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALREADY_EXISTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeHostKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostKeyFingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateImported'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Profile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileType'),
                    new \PHPStan\Type\Constant\ConstantStringType('As2Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTNER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeSecurityPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Fips'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshCiphers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshKexs'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshMacs'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsCiphers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshHostKeyAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTOR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SFTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('FTPS'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Server'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtocolDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostKeyFingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostAuthenticationLoginBanner'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreAuthenticationLoginBanner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('StructuredLogDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3StorageOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('As2ServiceManagedEgressIpAddresses'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PassiveIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('TlsSessionResumptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('SetStatOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('As2Transports'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENFORCED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_NO_OP'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('HTTP')),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AddressAllocationIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Function'),
                        new \PHPStan\Type\Constant\ConstantStringType('SftpAuthenticationMethods'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY_OR_PASSWORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY_AND_PASSWORD'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_DIRECTORY_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SFTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('FTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('FTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AS2'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OnUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnPartialUpload'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryListingOptimization'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectoryMappings'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('PosixProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshPublicKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Entry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY'),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PATH'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOGICAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecondaryGids'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DateImported'),
                        new \PHPStan\Type\Constant\ConstantStringType('SshPublicKeyBody'),
                        new \PHPStan\Type\Constant\ConstantStringType('SshPublicKeyId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeWebApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebApp'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebAppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DescribedIdentityProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebAppEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebAppUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Provisioned'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeWebAppCustomization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebAppCustomization'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebAppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogoFile'),
                    new \PHPStan\Type\Constant\ConstantStringType('FaviconFile'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Workflow'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnExceptionSteps'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('CopyStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('DecryptStepDetails'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COPY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECRYPT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationFileLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('OverwriteExisting'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3FileLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('EfsFileLocation'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('OverwriteExisting'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PGP'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3FileLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('EfsFileLocation'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('CopyStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagStepDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('DecryptStepDetails'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COPY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DECRYPT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationFileLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('OverwriteExisting'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3FileLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('EfsFileLocation'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFileLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('OverwriteExisting'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationFileLocation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PGP'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3FileLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('EfsFileLocation'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function importCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importHostKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('HostKeyId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importSshPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('SshPublicKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccesses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('Accesses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PATH'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOGICAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listAgreements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Agreements'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgreementId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartnerProfileId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Usage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('InactiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENCRYPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ROTATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CERTIFICATE_WITH_PRIVATE_KEY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Connectors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                new \PHPStan\Type\Constant\ConstantStringType('Executions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitialFileLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3FileLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EfsFileLocation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Etag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UserDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('HANDLING_EXCEPTION'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFileTransferResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileTransferResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHostKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('HostKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateImported'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('As2Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTNER'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listSecurityPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicyNames'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Servers'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_DIRECTORY_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeDirectoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshPublicKeyCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PATH'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOGICAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listWebApps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WebApps'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebAppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebAppEndpoint'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listWorkflows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Workflows'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function sendWorkflowStepState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startDirectoryListing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ListingId'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputFileName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startFileTransfer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransferId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function testConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectorId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function testIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Response'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAgreement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgreementId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectorId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateHostKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('HostKeyId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerId'),
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateWebApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebAppId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateWebAppCustomization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebAppId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}