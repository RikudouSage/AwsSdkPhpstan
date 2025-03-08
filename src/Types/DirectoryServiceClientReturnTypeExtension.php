<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DirectoryServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DirectoryService\DirectoryServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\DirectoryService\DirectoryServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptSharedDirectory',
            'addIpRoutes',
            'addRegion',
            'addTagsToResource',
            'cancelSchemaExtension',
            'connectDirectory',
            'createAlias',
            'createComputer',
            'createConditionalForwarder',
            'createDirectory',
            'createLogSubscription',
            'createMicrosoftAD',
            'createSnapshot',
            'createTrust',
            'deleteConditionalForwarder',
            'deleteDirectory',
            'deleteLogSubscription',
            'deleteSnapshot',
            'deleteTrust',
            'deregisterCertificate',
            'deregisterEventTopic',
            'describeCertificate',
            'describeClientAuthenticationSettings',
            'describeConditionalForwarders',
            'describeDirectories',
            'describeDirectoryDataAccess',
            'describeDomainControllers',
            'describeEventTopics',
            'describeLDAPSSettings',
            'describeRegions',
            'describeSettings',
            'describeSharedDirectories',
            'describeSnapshots',
            'describeTrusts',
            'describeUpdateDirectory',
            'disableClientAuthentication',
            'disableDirectoryDataAccess',
            'disableLDAPS',
            'disableRadius',
            'disableSso',
            'enableClientAuthentication',
            'enableDirectoryDataAccess',
            'enableLDAPS',
            'enableRadius',
            'enableSso',
            'getDirectoryLimits',
            'getSnapshotLimits',
            'listCertificates',
            'listIpRoutes',
            'listLogSubscriptions',
            'listSchemaExtensions',
            'listTagsForResource',
            'registerCertificate',
            'registerEventTopic',
            'rejectSharedDirectory',
            'removeIpRoutes',
            'removeRegion',
            'removeTagsFromResource',
            'resetUserPassword',
            'restoreFromSnapshot',
            'shareDirectory',
            'startSchemaExtension',
            'unshareDirectory',
            'updateConditionalForwarder',
            'updateDirectorySetup',
            'updateNumberOfDomainControllers',
            'updateRadius',
            'updateSettings',
            'updateTrust',
            'verifyTrust',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptSharedDirectory' => $this->acceptSharedDirectory(),
            'addIpRoutes' => $this->addIpRoutes(),
            'addRegion' => $this->addRegion(),
            'addTagsToResource' => $this->addTagsToResource(),
            'cancelSchemaExtension' => $this->cancelSchemaExtension(),
            'connectDirectory' => $this->connectDirectory(),
            'createAlias' => $this->createAlias(),
            'createComputer' => $this->createComputer(),
            'createConditionalForwarder' => $this->createConditionalForwarder(),
            'createDirectory' => $this->createDirectory(),
            'createLogSubscription' => $this->createLogSubscription(),
            'createMicrosoftAD' => $this->createMicrosoftAD(),
            'createSnapshot' => $this->createSnapshot(),
            'createTrust' => $this->createTrust(),
            'deleteConditionalForwarder' => $this->deleteConditionalForwarder(),
            'deleteDirectory' => $this->deleteDirectory(),
            'deleteLogSubscription' => $this->deleteLogSubscription(),
            'deleteSnapshot' => $this->deleteSnapshot(),
            'deleteTrust' => $this->deleteTrust(),
            'deregisterCertificate' => $this->deregisterCertificate(),
            'deregisterEventTopic' => $this->deregisterEventTopic(),
            'describeCertificate' => $this->describeCertificate(),
            'describeClientAuthenticationSettings' => $this->describeClientAuthenticationSettings(),
            'describeConditionalForwarders' => $this->describeConditionalForwarders(),
            'describeDirectories' => $this->describeDirectories(),
            'describeDirectoryDataAccess' => $this->describeDirectoryDataAccess(),
            'describeDomainControllers' => $this->describeDomainControllers(),
            'describeEventTopics' => $this->describeEventTopics(),
            'describeLDAPSSettings' => $this->describeLDAPSSettings(),
            'describeRegions' => $this->describeRegions(),
            'describeSettings' => $this->describeSettings(),
            'describeSharedDirectories' => $this->describeSharedDirectories(),
            'describeSnapshots' => $this->describeSnapshots(),
            'describeTrusts' => $this->describeTrusts(),
            'describeUpdateDirectory' => $this->describeUpdateDirectory(),
            'disableClientAuthentication' => $this->disableClientAuthentication(),
            'disableDirectoryDataAccess' => $this->disableDirectoryDataAccess(),
            'disableLDAPS' => $this->disableLDAPS(),
            'disableRadius' => $this->disableRadius(),
            'disableSso' => $this->disableSso(),
            'enableClientAuthentication' => $this->enableClientAuthentication(),
            'enableDirectoryDataAccess' => $this->enableDirectoryDataAccess(),
            'enableLDAPS' => $this->enableLDAPS(),
            'enableRadius' => $this->enableRadius(),
            'enableSso' => $this->enableSso(),
            'getDirectoryLimits' => $this->getDirectoryLimits(),
            'getSnapshotLimits' => $this->getSnapshotLimits(),
            'listCertificates' => $this->listCertificates(),
            'listIpRoutes' => $this->listIpRoutes(),
            'listLogSubscriptions' => $this->listLogSubscriptions(),
            'listSchemaExtensions' => $this->listSchemaExtensions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerCertificate' => $this->registerCertificate(),
            'registerEventTopic' => $this->registerEventTopic(),
            'rejectSharedDirectory' => $this->rejectSharedDirectory(),
            'removeIpRoutes' => $this->removeIpRoutes(),
            'removeRegion' => $this->removeRegion(),
            'removeTagsFromResource' => $this->removeTagsFromResource(),
            'resetUserPassword' => $this->resetUserPassword(),
            'restoreFromSnapshot' => $this->restoreFromSnapshot(),
            'shareDirectory' => $this->shareDirectory(),
            'startSchemaExtension' => $this->startSchemaExtension(),
            'unshareDirectory' => $this->unshareDirectory(),
            'updateConditionalForwarder' => $this->updateConditionalForwarder(),
            'updateDirectorySetup' => $this->updateDirectorySetup(),
            'updateNumberOfDomainControllers' => $this->updateNumberOfDomainControllers(),
            'updateRadius' => $this->updateRadius(),
            'updateSettings' => $this->updateSettings(),
            'updateTrust' => $this->updateTrust(),
            'verifyTrust' => $this->verifyTrust(),
        };
    }
    private function acceptSharedDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SharedDirectory'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerDirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedDirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareNotes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('HANDSHAKE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Shared'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingAcceptance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejecting'),
                        new \PHPStan\Type\Constant\ConstantStringType('RejectFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sharing'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShareFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function addIpRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addRegion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addTagsToResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelSchemaExtension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function connectDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createComputer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Computer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComputerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputerAttributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createConditionalForwarder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLogSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createMicrosoftAD(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrust(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteConditionalForwarder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLogSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteTrust(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deregisterCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterEventTopic(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CommonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientCertAuthSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Registering'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegisterFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deregistering'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deregistered'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeregisterFailed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientCertAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientLDAPS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OCSPUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeClientAuthenticationSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientAuthenticationSettingsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SmartCard'),
                        new \PHPStan\Type\Constant\ConstantStringType('SmartCardOrPassword'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConditionalForwarders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConditionalForwarders'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RemoteDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsIpAddrs'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationScope'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                ]),
            ]),
        ]);
    }
    private function describeDirectories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShortName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('Edition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsIpAddrs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareNotes'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StageLastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('RadiusSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('RadiusStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StageReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('SsoEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredNumberOfDomainControllers'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerDirectoryDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegionsInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('OsVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Small'),
                        new \PHPStan\Type\Constant\ConstantStringType('Large'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enterprise'),
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inoperable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Impaired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Shared'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingAcceptance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejecting'),
                        new \PHPStan\Type\Constant\ConstantStringType('RejectFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sharing'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShareFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('HANDSHAKE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SimpleAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADConnector'),
                        new \PHPStan\Type\Constant\ConstantStringType('MicrosoftAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SharedMicrosoftAD'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerUserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectIps'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RadiusServers'),
                        new \PHPStan\Type\Constant\ConstantStringType('RadiusPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('RadiusTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('RadiusRetries'),
                        new \PHPStan\Type\Constant\ConstantStringType('SharedSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseSameUsername'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('MS-CHAPv1'),
                            new \PHPStan\Type\Constant\ConstantStringType('MS-CHAPv2'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsIpAddrs'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('RadiusSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('RadiusStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RadiusServers'),
                            new \PHPStan\Type\Constant\ConstantStringType('RadiusPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('RadiusTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('RadiusRetries'),
                            new \PHPStan\Type\Constant\ConstantStringType('SharedSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProtocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayLabel'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseSameUsername'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PAP'),
                                new \PHPStan\Type\Constant\ConstantStringType('CHAP'),
                                new \PHPStan\Type\Constant\ConstantStringType('MS-CHAPv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('MS-CHAPv2'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalRegions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_2012'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_2019'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDirectoryDataAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataAccessStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
            ]),
        ]);
    }
    private function describeDomainControllers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainControllers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainControllerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsIpAddr'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusLastUpdatedDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Impaired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEventTopics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventTopics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Topic not found'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeLDAPSSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LDAPSSettingsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LDAPSStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LDAPSStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegionsDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredNumberOfDomainControllers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusLastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Additional'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inoperable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Impaired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('SettingEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppliedValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestDetailedStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRequestedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Default'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Default'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSharedDirectories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SharedDirectories'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerDirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedDirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareNotes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('HANDSHAKE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Shared'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingAcceptance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejecting'),
                        new \PHPStan\Type\Constant\ConstantStringType('RejectFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sharing'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShareFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshots'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Auto'),
                        new \PHPStan\Type\Constant\ConstantStringType('Manual'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTrusts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Trusts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemoteDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustDirection'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustState'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateLastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustStateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectiveAuth'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Forest'),
                        new \PHPStan\Type\Constant\ConstantStringType('External'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('One-Way: Outgoing'),
                        new \PHPStan\Type\Constant\ConstantStringType('One-Way: Incoming'),
                        new \PHPStan\Type\Constant\ConstantStringType('Two-Way'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerifyFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUpdateDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateActivities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Updated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateFailed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OSUpdateSettings'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OSVersion'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVER_2012'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVER_2019'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OSUpdateSettings'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OSVersion'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVER_2012'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVER_2019'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disableClientAuthentication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableDirectoryDataAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableLDAPS(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableRadius(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableSso(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableClientAuthentication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableDirectoryDataAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableLDAPS(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableRadius(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableSso(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getDirectoryLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryLimits'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CloudOnlyDirectoriesLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudOnlyDirectoriesCurrentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudOnlyDirectoriesLimitReached'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudOnlyMicrosoftADLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudOnlyMicrosoftADCurrentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudOnlyMicrosoftADLimitReached'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedDirectoriesLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedDirectoriesCurrentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedDirectoriesLimitReached'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getSnapshotLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotLimits'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotsLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotsCurrentCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotsLimitReached'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function listCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CertificatesInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CommonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Registering'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegisterFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deregistering'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deregistered'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeregisterFailed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientCertAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientLDAPS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listIpRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IpRoutesInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CidrIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpRouteStatusMsg'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpRouteStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Adding'),
                        new \PHPStan\Type\Constant\ConstantStringType('Added'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoveFailed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLogSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LogSubscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreatedDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSchemaExtensions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaExtensionsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaExtensionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaExtensionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaExtensionStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatingSnapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatingSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Replicating'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancelInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CertificateId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerEventTopic(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function rejectSharedDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SharedDirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeIpRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeRegion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeTagsFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function resetUserPassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function restoreFromSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function shareDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SharedDirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSchemaExtension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaExtensionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function unshareDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SharedDirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConditionalForwarder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDirectorySetup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateNumberOfDomainControllers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRadius(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateTrust(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('TrustId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyTrust(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}