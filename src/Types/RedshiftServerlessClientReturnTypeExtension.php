<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class RedshiftServerlessClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\RedshiftServerless\RedshiftServerlessClient>
     */
    public function getClass(): string
    {
        return \Aws\RedshiftServerless\RedshiftServerlessClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'convertRecoveryPointToSnapshot',
            'createCustomDomainAssociation',
            'createEndpointAccess',
            'createNamespace',
            'createScheduledAction',
            'createSnapshot',
            'createSnapshotCopyConfiguration',
            'createUsageLimit',
            'createWorkgroup',
            'deleteCustomDomainAssociation',
            'deleteEndpointAccess',
            'deleteNamespace',
            'deleteResourcePolicy',
            'deleteScheduledAction',
            'deleteSnapshot',
            'deleteSnapshotCopyConfiguration',
            'deleteUsageLimit',
            'deleteWorkgroup',
            'getCredentials',
            'getCustomDomainAssociation',
            'getEndpointAccess',
            'getNamespace',
            'getRecoveryPoint',
            'getResourcePolicy',
            'getScheduledAction',
            'getSnapshot',
            'getTableRestoreStatus',
            'getTrack',
            'getUsageLimit',
            'getWorkgroup',
            'listCustomDomainAssociations',
            'listEndpointAccess',
            'listManagedWorkgroups',
            'listNamespaces',
            'listRecoveryPoints',
            'listScheduledActions',
            'listSnapshotCopyConfigurations',
            'listSnapshots',
            'listTableRestoreStatus',
            'listTagsForResource',
            'listTracks',
            'listUsageLimits',
            'listWorkgroups',
            'putResourcePolicy',
            'restoreFromRecoveryPoint',
            'restoreFromSnapshot',
            'restoreTableFromRecoveryPoint',
            'restoreTableFromSnapshot',
            'tagResource',
            'untagResource',
            'updateCustomDomainAssociation',
            'updateEndpointAccess',
            'updateNamespace',
            'updateScheduledAction',
            'updateSnapshot',
            'updateSnapshotCopyConfiguration',
            'updateUsageLimit',
            'updateWorkgroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'convertRecoveryPointToSnapshot' => $this->convertRecoveryPointToSnapshot(),
            'createCustomDomainAssociation' => $this->createCustomDomainAssociation(),
            'createEndpointAccess' => $this->createEndpointAccess(),
            'createNamespace' => $this->createNamespace(),
            'createScheduledAction' => $this->createScheduledAction(),
            'createSnapshot' => $this->createSnapshot(),
            'createSnapshotCopyConfiguration' => $this->createSnapshotCopyConfiguration(),
            'createUsageLimit' => $this->createUsageLimit(),
            'createWorkgroup' => $this->createWorkgroup(),
            'deleteCustomDomainAssociation' => $this->deleteCustomDomainAssociation(),
            'deleteEndpointAccess' => $this->deleteEndpointAccess(),
            'deleteNamespace' => $this->deleteNamespace(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteScheduledAction' => $this->deleteScheduledAction(),
            'deleteSnapshot' => $this->deleteSnapshot(),
            'deleteSnapshotCopyConfiguration' => $this->deleteSnapshotCopyConfiguration(),
            'deleteUsageLimit' => $this->deleteUsageLimit(),
            'deleteWorkgroup' => $this->deleteWorkgroup(),
            'getCredentials' => $this->getCredentials(),
            'getCustomDomainAssociation' => $this->getCustomDomainAssociation(),
            'getEndpointAccess' => $this->getEndpointAccess(),
            'getNamespace' => $this->getNamespace(),
            'getRecoveryPoint' => $this->getRecoveryPoint(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getScheduledAction' => $this->getScheduledAction(),
            'getSnapshot' => $this->getSnapshot(),
            'getTableRestoreStatus' => $this->getTableRestoreStatus(),
            'getTrack' => $this->getTrack(),
            'getUsageLimit' => $this->getUsageLimit(),
            'getWorkgroup' => $this->getWorkgroup(),
            'listCustomDomainAssociations' => $this->listCustomDomainAssociations(),
            'listEndpointAccess' => $this->listEndpointAccess(),
            'listManagedWorkgroups' => $this->listManagedWorkgroups(),
            'listNamespaces' => $this->listNamespaces(),
            'listRecoveryPoints' => $this->listRecoveryPoints(),
            'listScheduledActions' => $this->listScheduledActions(),
            'listSnapshotCopyConfigurations' => $this->listSnapshotCopyConfigurations(),
            'listSnapshots' => $this->listSnapshots(),
            'listTableRestoreStatus' => $this->listTableRestoreStatus(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTracks' => $this->listTracks(),
            'listUsageLimits' => $this->listUsageLimits(),
            'listWorkgroups' => $this->listWorkgroups(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'restoreFromRecoveryPoint' => $this->restoreFromRecoveryPoint(),
            'restoreFromSnapshot' => $this->restoreFromSnapshot(),
            'restoreTableFromRecoveryPoint' => $this->restoreTableFromRecoveryPoint(),
            'restoreTableFromSnapshot' => $this->restoreTableFromSnapshot(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCustomDomainAssociation' => $this->updateCustomDomainAssociation(),
            'updateEndpointAccess' => $this->updateEndpointAccess(),
            'updateNamespace' => $this->updateNamespace(),
            'updateScheduledAction' => $this->updateScheduledAction(),
            'updateSnapshot' => $this->updateSnapshot(),
            'updateSnapshotCopyConfiguration' => $this->updateSnapshotCopyConfiguration(),
            'updateUsageLimit' => $this->updateUsageLimit(),
            'updateWorkgroup' => $this->updateWorkgroup(),
        };
    }
    private function convertRecoveryPointToSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithProvisionedRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('actualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalBackupSizeInMegaBytes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function createCustomDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbName'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('logExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('useractivitylog'),
                            new \PHPStan\Type\Constant\ConstantStringType('userlog'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionlog'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('nextInvocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionUuid'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAction'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('at'),
                        new \PHPStan\Type\Constant\ConstantStringType('cron'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createSnapshot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('retentionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('snapshotNamePrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithProvisionedRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('actualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalBackupSizeInMegaBytes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function createSnapshotCopyConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destinationKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createUsageLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('usageLimit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('amount'),
                    new \PHPStan\Type\Constant\ConstantStringType('breachAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('period'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('log'),
                        new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('deactivate'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('daily'),
                        new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                        new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverless-compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createWorkgroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workgroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('configParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('crossAccountVpcs'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('patchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricePerformanceTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('parameterKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameterValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('address'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('level'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteCustomDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbName'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('logExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('useractivitylog'),
                            new \PHPStan\Type\Constant\ConstantStringType('userlog'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionlog'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('nextInvocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionUuid'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAction'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('at'),
                        new \PHPStan\Type\Constant\ConstantStringType('cron'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createSnapshot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('retentionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('snapshotNamePrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithProvisionedRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('actualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalBackupSizeInMegaBytes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function deleteSnapshotCopyConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destinationKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function deleteUsageLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('usageLimit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('amount'),
                    new \PHPStan\Type\Constant\ConstantStringType('breachAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('period'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('log'),
                        new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('deactivate'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('daily'),
                        new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                        new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverless-compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteWorkgroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workgroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('configParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('crossAccountVpcs'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('patchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricePerformanceTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('parameterKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameterValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('address'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('level'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dbPassword'),
                new \PHPStan\Type\Constant\ConstantStringType('dbUser'),
                new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('nextRefreshTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getCustomDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbName'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('logExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('useractivitylog'),
                            new \PHPStan\Type\Constant\ConstantStringType('userlog'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionlog'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recoveryPoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryPointCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryPointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourcePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('nextInvocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionUuid'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAction'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('at'),
                        new \PHPStan\Type\Constant\ConstantStringType('cron'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createSnapshot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('retentionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('snapshotNamePrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithProvisionedRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('actualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalBackupSizeInMegaBytes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function getTableRestoreStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tableRestoreStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('newTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryPointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableRestoreRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalDataInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTrack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('track'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                            new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getUsageLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('usageLimit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('amount'),
                    new \PHPStan\Type\Constant\ConstantStringType('breachAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('period'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('log'),
                        new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('deactivate'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('daily'),
                        new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                        new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverless-compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getWorkgroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workgroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('configParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('crossAccountVpcs'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('patchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricePerformanceTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('parameterKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameterValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('address'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('level'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCustomDomainAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    ], [
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
    private function listEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('address'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointName'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedWorkgroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('managedWorkgroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedWorkgroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedWorkgroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNamespaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespaces'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('dbName'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultIamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRoles'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('logExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('useractivitylog'),
                                new \PHPStan\Type\Constant\ConstantStringType('userlog'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectionlog'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecoveryPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('recoveryPoints'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryPointCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryPointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listScheduledActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('scheduledActions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledActionName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listSnapshotCopyConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('snapshots'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountsWithProvisionedRestoreAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountsWithRestoreAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('actualIncrementalBackupSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                        new \PHPStan\Type\Constant\ConstantStringType('backupProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentBackupRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('elapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedSecondsToCompletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotRemainingDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalBackupSizeInMegaBytes'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTableRestoreStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tableRestoreStatuses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('newTableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('progressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryPointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceDatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceSchemaName'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceTableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('tableRestoreRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetDatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetSchemaName'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTracks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tracks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateTargets'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                                new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listUsageLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('usageLimits'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('breachAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('period'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageLimitArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageLimitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('log'),
                            new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                            new \PHPStan\Type\Constant\ConstantStringType('deactivate'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('serverless-compute'),
                            new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWorkgroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('workgroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('configParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('crossAccountVpcs'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('enhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('patchVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('pricePerformanceTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('parameterKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameterValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('address'),
                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoints'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                            new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                            new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('level'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourcePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function restoreFromRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('recoveryPointId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbName'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('logExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('useractivitylog'),
                            new \PHPStan\Type\Constant\ConstantStringType('userlog'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionlog'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function restoreFromSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbName'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('logExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('useractivitylog'),
                            new \PHPStan\Type\Constant\ConstantStringType('userlog'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionlog'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function restoreTableFromRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tableRestoreStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('newTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryPointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableRestoreRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalDataInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function restoreTableFromSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tableRestoreStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('newTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryPointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableRestoreRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalDataInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
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
    private function updateCustomDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpointStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbName'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('logExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('useractivitylog'),
                            new \PHPStan\Type\Constant\ConstantStringType('userlog'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionlog'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scheduledAction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('nextInvocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledActionUuid'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAction'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('at'),
                        new \PHPStan\Type\Constant\ConstantStringType('cron'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createSnapshot'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('retentionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('snapshotNamePrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithProvisionedRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('actualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('adminUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalBackupSizeInMegaBytes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function updateSnapshotCopyConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destinationKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCopyConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotRetentionPeriod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateUsageLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('usageLimit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('amount'),
                    new \PHPStan\Type\Constant\ConstantStringType('breachAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('period'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageLimitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('log'),
                        new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('deactivate'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('daily'),
                        new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                        new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverless-compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateWorkgroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workgroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('configParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('crossAccountVpcs'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainCertificateExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('patchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('pricePerformanceTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('trackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('workgroupVersion'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('parameterKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameterValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('address'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('level'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}