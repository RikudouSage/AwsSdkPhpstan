<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodeConnectionsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodeConnections\CodeConnectionsClient>
     */
    public function getClass(): string
    {
        return \Aws\CodeConnections\CodeConnectionsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createConnection',
            'createHost',
            'createRepositoryLink',
            'createSyncConfiguration',
            'deleteConnection',
            'deleteHost',
            'deleteRepositoryLink',
            'deleteSyncConfiguration',
            'getConnection',
            'getHost',
            'getRepositoryLink',
            'getRepositorySyncStatus',
            'getResourceSyncStatus',
            'getSyncBlockerSummary',
            'getSyncConfiguration',
            'listConnections',
            'listHosts',
            'listRepositoryLinks',
            'listRepositorySyncDefinitions',
            'listSyncConfigurations',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateHost',
            'updateRepositoryLink',
            'updateSyncBlocker',
            'updateSyncConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createConnection' => $this->createConnection(),
            'createHost' => $this->createHost(),
            'createRepositoryLink' => $this->createRepositoryLink(),
            'createSyncConfiguration' => $this->createSyncConfiguration(),
            'deleteConnection' => $this->deleteConnection(),
            'deleteHost' => $this->deleteHost(),
            'deleteRepositoryLink' => $this->deleteRepositoryLink(),
            'deleteSyncConfiguration' => $this->deleteSyncConfiguration(),
            'getConnection' => $this->getConnection(),
            'getHost' => $this->getHost(),
            'getRepositoryLink' => $this->getRepositoryLink(),
            'getRepositorySyncStatus' => $this->getRepositorySyncStatus(),
            'getResourceSyncStatus' => $this->getResourceSyncStatus(),
            'getSyncBlockerSummary' => $this->getSyncBlockerSummary(),
            'getSyncConfiguration' => $this->getSyncConfiguration(),
            'listConnections' => $this->listConnections(),
            'listHosts' => $this->listHosts(),
            'listRepositoryLinks' => $this->listRepositoryLinks(),
            'listRepositorySyncDefinitions' => $this->listRepositorySyncDefinitions(),
            'listSyncConfigurations' => $this->listSyncConfigurations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateHost' => $this->updateHost(),
            'updateRepositoryLink' => $this->updateRepositoryLink(),
            'updateSyncBlocker' => $this->updateSyncBlocker(),
            'updateSyncConfiguration' => $this->updateSyncConfiguration(),
        };
    }
    private function createConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createHost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createRepositoryLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSyncConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SyncConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigFile'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublishDeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerResourceUpdateOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PullRequestComment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CFN_STACK_SYNC'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANY_CHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE_CHANGE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteHost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRepositoryLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSyncConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getHost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                new \PHPStan\Type\Constant\ConstantStringType('ProviderEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                    new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                    new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                    new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsCertificate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRepositoryLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRepositorySyncStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LatestSync'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getResourceSyncStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestSuccessfulSync'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestSync'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('Directory'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sha'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitialRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitialRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSyncBlockerSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SyncBlockerSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestBlockers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Contexts'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResolvedReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResolvedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSyncConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SyncConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigFile'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublishDeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerResourceUpdateOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PullRequestComment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CFN_STACK_SYNC'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANY_CHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE_CHANGE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connections'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHosts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Hosts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('TlsCertificate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositoryLinks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositorySyncDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositorySyncDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('Directory'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSyncConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SyncConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigFile'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublishDeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerResourceUpdateOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PullRequestComment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CFN_STACK_SYNC'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANY_CHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE_CHANGE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
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
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function updateHost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRepositoryLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSyncBlocker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('SyncBlocker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Contexts'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResolvedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResolvedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateSyncConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SyncConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigFile'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublishDeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggerResourceUpdateOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PullRequestComment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHubEnterpriseServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLab'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitLabSelfManaged'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CFN_STACK_SYNC'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANY_CHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILE_CHANGE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
}