<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class WorkSpacesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\WorkSpaces\WorkSpacesClient>
     */
    public function getClass(): string
    {
        return \Aws\WorkSpaces\WorkSpacesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptAccountLinkInvitation',
            'associateConnectionAlias',
            'associateIpGroups',
            'associateWorkspaceApplication',
            'authorizeIpRules',
            'copyWorkspaceImage',
            'createAccountLinkInvitation',
            'createConnectClientAddIn',
            'createConnectionAlias',
            'createIpGroup',
            'createStandbyWorkspaces',
            'createTags',
            'createUpdatedWorkspaceImage',
            'createWorkspaceBundle',
            'createWorkspaceImage',
            'createWorkspaces',
            'createWorkspacesPool',
            'deleteAccountLinkInvitation',
            'deleteClientBranding',
            'deleteConnectClientAddIn',
            'deleteConnectionAlias',
            'deleteIpGroup',
            'deleteTags',
            'deleteWorkspaceBundle',
            'deleteWorkspaceImage',
            'deployWorkspaceApplications',
            'deregisterWorkspaceDirectory',
            'describeAccount',
            'describeAccountModifications',
            'describeApplicationAssociations',
            'describeApplications',
            'describeBundleAssociations',
            'describeClientBranding',
            'describeClientProperties',
            'describeConnectClientAddIns',
            'describeConnectionAliasPermissions',
            'describeConnectionAliases',
            'describeImageAssociations',
            'describeIpGroups',
            'describeTags',
            'describeWorkspaceAssociations',
            'describeWorkspaceBundles',
            'describeWorkspaceDirectories',
            'describeWorkspaceImagePermissions',
            'describeWorkspaceImages',
            'describeWorkspaceSnapshots',
            'describeWorkspaces',
            'describeWorkspacesConnectionStatus',
            'describeWorkspacesPoolSessions',
            'describeWorkspacesPools',
            'disassociateConnectionAlias',
            'disassociateIpGroups',
            'disassociateWorkspaceApplication',
            'getAccountLink',
            'importClientBranding',
            'importWorkspaceImage',
            'listAccountLinks',
            'listAvailableManagementCidrRanges',
            'migrateWorkspace',
            'modifyAccount',
            'modifyCertificateBasedAuthProperties',
            'modifyClientProperties',
            'modifyEndpointEncryptionMode',
            'modifySamlProperties',
            'modifySelfservicePermissions',
            'modifyStreamingProperties',
            'modifyWorkspaceAccessProperties',
            'modifyWorkspaceCreationProperties',
            'modifyWorkspaceProperties',
            'modifyWorkspaceState',
            'rebootWorkspaces',
            'rebuildWorkspaces',
            'registerWorkspaceDirectory',
            'rejectAccountLinkInvitation',
            'restoreWorkspace',
            'revokeIpRules',
            'startWorkspaces',
            'startWorkspacesPool',
            'stopWorkspaces',
            'stopWorkspacesPool',
            'terminateWorkspaces',
            'terminateWorkspacesPool',
            'terminateWorkspacesPoolSession',
            'updateConnectClientAddIn',
            'updateConnectionAliasPermission',
            'updateRulesOfIpGroup',
            'updateWorkspaceBundle',
            'updateWorkspaceImagePermission',
            'updateWorkspacesPool',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptAccountLinkInvitation' => $this->acceptAccountLinkInvitation(),
            'associateConnectionAlias' => $this->associateConnectionAlias(),
            'associateIpGroups' => $this->associateIpGroups(),
            'associateWorkspaceApplication' => $this->associateWorkspaceApplication(),
            'authorizeIpRules' => $this->authorizeIpRules(),
            'copyWorkspaceImage' => $this->copyWorkspaceImage(),
            'createAccountLinkInvitation' => $this->createAccountLinkInvitation(),
            'createConnectClientAddIn' => $this->createConnectClientAddIn(),
            'createConnectionAlias' => $this->createConnectionAlias(),
            'createIpGroup' => $this->createIpGroup(),
            'createStandbyWorkspaces' => $this->createStandbyWorkspaces(),
            'createTags' => $this->createTags(),
            'createUpdatedWorkspaceImage' => $this->createUpdatedWorkspaceImage(),
            'createWorkspaceBundle' => $this->createWorkspaceBundle(),
            'createWorkspaceImage' => $this->createWorkspaceImage(),
            'createWorkspaces' => $this->createWorkspaces(),
            'createWorkspacesPool' => $this->createWorkspacesPool(),
            'deleteAccountLinkInvitation' => $this->deleteAccountLinkInvitation(),
            'deleteClientBranding' => $this->deleteClientBranding(),
            'deleteConnectClientAddIn' => $this->deleteConnectClientAddIn(),
            'deleteConnectionAlias' => $this->deleteConnectionAlias(),
            'deleteIpGroup' => $this->deleteIpGroup(),
            'deleteTags' => $this->deleteTags(),
            'deleteWorkspaceBundle' => $this->deleteWorkspaceBundle(),
            'deleteWorkspaceImage' => $this->deleteWorkspaceImage(),
            'deployWorkspaceApplications' => $this->deployWorkspaceApplications(),
            'deregisterWorkspaceDirectory' => $this->deregisterWorkspaceDirectory(),
            'describeAccount' => $this->describeAccount(),
            'describeAccountModifications' => $this->describeAccountModifications(),
            'describeApplicationAssociations' => $this->describeApplicationAssociations(),
            'describeApplications' => $this->describeApplications(),
            'describeBundleAssociations' => $this->describeBundleAssociations(),
            'describeClientBranding' => $this->describeClientBranding(),
            'describeClientProperties' => $this->describeClientProperties(),
            'describeConnectClientAddIns' => $this->describeConnectClientAddIns(),
            'describeConnectionAliasPermissions' => $this->describeConnectionAliasPermissions(),
            'describeConnectionAliases' => $this->describeConnectionAliases(),
            'describeImageAssociations' => $this->describeImageAssociations(),
            'describeIpGroups' => $this->describeIpGroups(),
            'describeTags' => $this->describeTags(),
            'describeWorkspaceAssociations' => $this->describeWorkspaceAssociations(),
            'describeWorkspaceBundles' => $this->describeWorkspaceBundles(),
            'describeWorkspaceDirectories' => $this->describeWorkspaceDirectories(),
            'describeWorkspaceImagePermissions' => $this->describeWorkspaceImagePermissions(),
            'describeWorkspaceImages' => $this->describeWorkspaceImages(),
            'describeWorkspaceSnapshots' => $this->describeWorkspaceSnapshots(),
            'describeWorkspaces' => $this->describeWorkspaces(),
            'describeWorkspacesConnectionStatus' => $this->describeWorkspacesConnectionStatus(),
            'describeWorkspacesPoolSessions' => $this->describeWorkspacesPoolSessions(),
            'describeWorkspacesPools' => $this->describeWorkspacesPools(),
            'disassociateConnectionAlias' => $this->disassociateConnectionAlias(),
            'disassociateIpGroups' => $this->disassociateIpGroups(),
            'disassociateWorkspaceApplication' => $this->disassociateWorkspaceApplication(),
            'getAccountLink' => $this->getAccountLink(),
            'importClientBranding' => $this->importClientBranding(),
            'importWorkspaceImage' => $this->importWorkspaceImage(),
            'listAccountLinks' => $this->listAccountLinks(),
            'listAvailableManagementCidrRanges' => $this->listAvailableManagementCidrRanges(),
            'migrateWorkspace' => $this->migrateWorkspace(),
            'modifyAccount' => $this->modifyAccount(),
            'modifyCertificateBasedAuthProperties' => $this->modifyCertificateBasedAuthProperties(),
            'modifyClientProperties' => $this->modifyClientProperties(),
            'modifyEndpointEncryptionMode' => $this->modifyEndpointEncryptionMode(),
            'modifySamlProperties' => $this->modifySamlProperties(),
            'modifySelfservicePermissions' => $this->modifySelfservicePermissions(),
            'modifyStreamingProperties' => $this->modifyStreamingProperties(),
            'modifyWorkspaceAccessProperties' => $this->modifyWorkspaceAccessProperties(),
            'modifyWorkspaceCreationProperties' => $this->modifyWorkspaceCreationProperties(),
            'modifyWorkspaceProperties' => $this->modifyWorkspaceProperties(),
            'modifyWorkspaceState' => $this->modifyWorkspaceState(),
            'rebootWorkspaces' => $this->rebootWorkspaces(),
            'rebuildWorkspaces' => $this->rebuildWorkspaces(),
            'registerWorkspaceDirectory' => $this->registerWorkspaceDirectory(),
            'rejectAccountLinkInvitation' => $this->rejectAccountLinkInvitation(),
            'restoreWorkspace' => $this->restoreWorkspace(),
            'revokeIpRules' => $this->revokeIpRules(),
            'startWorkspaces' => $this->startWorkspaces(),
            'startWorkspacesPool' => $this->startWorkspacesPool(),
            'stopWorkspaces' => $this->stopWorkspaces(),
            'stopWorkspacesPool' => $this->stopWorkspacesPool(),
            'terminateWorkspaces' => $this->terminateWorkspaces(),
            'terminateWorkspacesPool' => $this->terminateWorkspacesPool(),
            'terminateWorkspacesPoolSession' => $this->terminateWorkspacesPoolSession(),
            'updateConnectClientAddIn' => $this->updateConnectClientAddIn(),
            'updateConnectionAliasPermission' => $this->updateConnectionAliasPermission(),
            'updateRulesOfIpGroup' => $this->updateRulesOfIpGroup(),
            'updateWorkspaceBundle' => $this->updateWorkspaceBundle(),
            'updateWorkspaceImagePermission' => $this->updateWorkspaceImagePermission(),
            'updateWorkspacesPool' => $this->updateWorkspacesPool(),
        };
    }
    private function acceptAccountLinkInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLink'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINKING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINK_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function associateConnectionAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateIpGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateWorkspaceApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Association'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNINSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientDiskSpace'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientMemory'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError.UnsupportedOperatingSystem'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.WorkspaceUnreachable'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function authorizeIpRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function copyWorkspaceImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAccountLinkInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLink'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINKING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINK_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createConnectClientAddIn(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddInId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConnectionAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AliasId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIpGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStandbyWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedStandbyRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingStandbyRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StandbyWorkspaceRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryWorkspaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeEncryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataReplication'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
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
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_REPLICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRIMARY_AS_SOURCE'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADMIN_MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createUpdatedWorkspaceImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkspaceBundle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspaceBundle'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('BundleType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWERPRO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_4XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_8XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS_G4DN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO_G4DN'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createWorkspaceImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('RequiredTenancy'),
                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEDICATED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                            new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeEncryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserVolumeEncryptionEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('RootVolumeEncryptionEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkspaceProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkspaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RunningMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('RunningModeAutoStopTimeoutInMinutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('RootVolumeSizeGib'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserVolumeSizeGib'),
                                new \PHPStan\Type\Constant\ConstantStringType('ComputeTypeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                                new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemName'),
                                new \PHPStan\Type\Constant\ConstantStringType('GlobalAccelerator'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_STOP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALWAYS_ON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POWER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POWERPRO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_4XLARGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_8XLARGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS_G4DN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO_G4DN'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PCOIP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WSP'),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_18_04'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_20_04'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_22_04'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_10'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_11'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RHEL_8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROCKY_8'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PreferredProtocol'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED_AUTO'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeEncryptionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserVolumeEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootVolumeEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModificationStates'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedWorkspaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataReplicationSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandbyWorkspacesProperties'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADMIN_MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RunningMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('RunningModeAutoStopTimeoutInMinutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('RootVolumeSizeGib'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserVolumeSizeGib'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeTypeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemName'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalAccelerator'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTO_STOP'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALWAYS_ON'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWER'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWERPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_4XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_8XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS_G4DN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO_G4DN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PCOIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WSP'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_18_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_20_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_22_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_10'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_11'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_7'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                                new \PHPStan\Type\Constant\ConstantStringType('RHEL_8'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROCKY_8'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredProtocol'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED_AUTO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROOT_VOLUME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_VOLUME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_TYPE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_INITIATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REBUILDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_MAINTENANCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataReplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecoverySnapshotTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_REPLICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRIMARY_AS_SOURCE'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StandbyWorkspaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataReplication'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecoverySnapshotTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_REPLICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY_AS_SOURCE'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createWorkspacesPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspacesPool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailableUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveUserSessions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKSPACES_POOL_STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_INVALID'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUNDLE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_PERMISSIONS_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_OU_IS_MISSING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SettingsGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdleDisconnectTimeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxUserDurationInSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAccountLinkInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLink'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINKING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINK_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteClientBranding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConnectClientAddIn(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConnectionAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIpGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWorkspaceBundle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWorkspaceImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deployWorkspaceApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Deployment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Created'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL_DEPLOYMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL_DEPLOYMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNINSTALLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientDiskSpace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientMemory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ValidationError.UnsupportedOperatingSystem'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.InternalServerError'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.WorkspaceUnreachable'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deregisterWorkspaceDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedTenancySupport'),
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedTenancyManagementCidrRange'),
                new \PHPStan\Type\Constant\ConstantStringType('DedicatedTenancyAccountType'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOURCE_ACCOUNT'),
                    new \PHPStan\Type\Constant\ConstantStringType('TARGET_ACCOUNT'),
                ]),
            ]),
        ]);
    }
    private function describeAccountModifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountModifications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ModificationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedTenancySupport'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedTenancyManagementCidrRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeApplicationAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WORKSPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUNDLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNINSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientDiskSpace'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientMemory'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.UnsupportedOperatingSystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.InternalServerError'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.WorkspaceUnreachable'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedComputeTypeNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedOperatingSystemNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LICENSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNLICENSED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNINSTALL_ONLY'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWER'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWERPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_4XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_8XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS_G4DN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO_G4DN'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_18_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_20_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_22_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_10'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_11'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_7'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                                new \PHPStan\Type\Constant\ConstantStringType('RHEL_8'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROCKY_8'),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBundleAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNINSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientDiskSpace'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientMemory'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.UnsupportedOperatingSystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.InternalServerError'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.WorkspaceUnreachable'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClientBranding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeWindows'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeOsx'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeAndroid'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeIos'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeLinux'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeWeb'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Logo2xUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Logo3xUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeClientProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientPropertiesList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientProperties'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReconnectEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogUploadEnabled'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeConnectClientAddIns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddIns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AddInId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConnectionAliasPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AliasId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAliasPermissions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SharedAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowAssociation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConnectionAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAliases'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionString'),
                        new \PHPStan\Type\Constant\ConstantStringType('AliasId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('AssociatedAccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionIdentifier'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSOCIATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED_WITH_OWNER_ACCOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED_WITH_SHARED_ACCOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ASSOCIATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DISASSOCIATION'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeImageAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNINSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientDiskSpace'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientMemory'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.UnsupportedOperatingSystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.InternalServerError'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.WorkspaceUnreachable'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeIpGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Result'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupDesc'),
                        new \PHPStan\Type\Constant\ConstantStringType('userRules'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ipRule'),
                                new \PHPStan\Type\Constant\ConstantStringType('ruleDesc'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
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
    private function describeWorkspaceAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNINSTALLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientDiskSpace'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientMemory'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationError.UnsupportedOperatingSystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.InternalServerError'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.WorkspaceUnreachable'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeWorkspaceBundles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bundles'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('BundleType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWER'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWERPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_4XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_8XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS_G4DN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO_G4DN'),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspaceDirectories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Directories'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegistrationCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsIpAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerUserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceCreationProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceAccessProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tenancy'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelfservicePermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('SamlProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateBasedAuthProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('MicrosoftEntraConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceDirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceDirectoryDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserIdentityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDCConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamingProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SIMPLE_AD'),
                            new \PHPStan\Type\Constant\ConstantStringType('AD_CONNECTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDENTITY_CENTER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnableWorkDocs'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableInternetAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultOu'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserEnabledAsLocalAdministrator'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableMaintenanceMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceIamRoleArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeWindows'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeOsx'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeWeb'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeIos'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeAndroid'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeChromeOs'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeZeroClient'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeLinux'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeWorkSpacesThinClient'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEDICATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RestartWorkspace'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncreaseVolumeSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChangeComputeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SwitchRunningMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('RebuildWorkspace'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserAccessUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('RelayStateParameterName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_TLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIPS_VALIDATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TenantId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigSecretArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_DIRECTORY_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM_IDENTITY_CENTER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERSONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('POOLS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountSecretArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StreamingExperiencePreferredProtocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConnectors'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalAccelerator'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                                new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumLength'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_FROM_LOCAL_DEVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_TO_LOCAL_DEVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRINTING_TO_LOCAL_DEVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SMART_CARD'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ConnectorType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('HOME_FOLDER'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredProtocol'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED_AUTO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspaceImagePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                new \PHPStan\Type\Constant\ConstantStringType('ImagePermissions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SharedAccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspaceImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Images'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequiredTenancy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updates'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEDICATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OutdatedPowershellVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OfficeInstalled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PCoIPAgentInstalled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WindowsUpdatesEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoMountDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WorkspacesBYOLAccountNotFound'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WorkspacesBYOLAccountDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DHCPDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DiskFreeSpace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDrivesAttached'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OSNotSupported'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoined'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AzureDomainJoined'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FirewallEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VMWareToolsInstalled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DiskSizeExceeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncompatiblePartitioning'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PendingReboot'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AutoLogonEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RealTimeUniversalDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MultipleBootPartition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Requires64BitOS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZeroRearmCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InPlaceUpgrade'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AntiVirusInstalled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UEFINotSupported'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AppXPackagesInstalled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReservedStorageInUse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDrivesPresent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WindowsUpdatesRequired'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SysPrepFileMissing'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserProfileMissing'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientDiskSpace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentVariablesPathMissingEntries'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainAccountServicesFound'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InvalidIp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RemoteDesktopServicesDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WindowsModulesInstallerDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AmazonSsmAgentEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnsupportedSecurityProtocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MultipleUserProfiles'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StagedAppxPackage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnsupportedOsUpgrade'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InsufficientRearmCount'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspaceSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RebuildSnapshots'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreSnapshots'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Workspaces'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComputerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeEncryptionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserVolumeEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootVolumeEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModificationStates'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedWorkspaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataReplicationSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandbyWorkspacesProperties'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REBUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADMIN_MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RunningMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('RunningModeAutoStopTimeoutInMinutes'),
                            new \PHPStan\Type\Constant\ConstantStringType('RootVolumeSizeGib'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserVolumeSizeGib'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeTypeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemName'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlobalAccelerator'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTO_STOP'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALWAYS_ON'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWER'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWERPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_4XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERALPURPOSE_8XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICS_G4DN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAPHICSPRO_G4DN'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PCOIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WSP'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_18_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_20_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UBUNTU_22_04'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_10'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_11'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_7'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                                new \PHPStan\Type\Constant\ConstantStringType('RHEL_8'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROCKY_8'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredProtocol'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED_AUTO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROOT_VOLUME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_VOLUME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_TYPE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_INITIATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REBUILDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN_MAINTENANCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataReplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecoverySnapshotTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_REPLICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRIMARY_AS_SOURCE'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StandbyWorkspaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataReplication'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecoverySnapshotTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_REPLICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY_AS_SOURCE'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspacesConnectionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspacesConnectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionState'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionStateCheckTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastKnownUserConnectionTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspacesPoolSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sessions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionState'),
                        new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkAccessConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EniPrivateIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspacesPools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspacesPools'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutSettings'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailableUserSessions'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredUserSessions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActualUserSessions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveUserSessions'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WORKSPACES_POOL_STOPPED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_INVALID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUNDLE_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_PERMISSIONS_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_OU_IS_MISSING'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('SettingsGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimeoutInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdleDisconnectTimeoutInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUserDurationInSeconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateConnectionAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateIpGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateWorkspaceApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Association'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALL_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UNINSTALL_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNINSTALLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientDiskSpace'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError.InsufficientMemory'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError.UnsupportedOperatingSystem'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeploymentError.WorkspaceUnreachable'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAccountLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLink'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINKING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINK_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function importClientBranding(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeWindows'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeOsx'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeAndroid'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeIos'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeLinux'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceTypeWeb'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Logo2xUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Logo3xUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForgotPasswordLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoginMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function importWorkspaceImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccountLinks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountLinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountLinkStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINKING_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINK_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAvailableManagementCidrRanges(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagementCidrRanges'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function migrateWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SourceWorkspaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetWorkspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyCertificateBasedAuthProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyClientProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyEndpointEncryptionMode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifySamlProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifySelfservicePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyStreamingProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyWorkspaceAccessProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyWorkspaceCreationProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyWorkspaceProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function modifyWorkspaceState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function rebootWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function rebuildWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function registerWorkspaceDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function rejectAccountLinkInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLink'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLinkStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LINKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINKING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINK_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function restoreWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function revokeIpRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function startWorkspacesPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function stopWorkspacesPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function terminateWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedRequests'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkspaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function terminateWorkspacesPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function terminateWorkspacesPoolSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateConnectClientAddIn(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateConnectionAliasPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRulesOfIpGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWorkspaceBundle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWorkspaceImagePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWorkspacesPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspacesPool'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('BundleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailableUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveUserSessions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKSPACES_POOL_STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_SECRET_INVALID'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUNDLE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_PERMISSIONS_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_OU_IS_MISSING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SettingsGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdleDisconnectTimeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxUserDurationInSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
}