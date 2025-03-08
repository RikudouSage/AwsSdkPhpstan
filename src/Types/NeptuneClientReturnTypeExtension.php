<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class NeptuneClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Neptune\NeptuneClient>
     */
    public function getClass(): string
    {
        return \Aws\Neptune\NeptuneClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addRoleToDBCluster',
            'addSourceIdentifierToSubscription',
            'addTagsToResource',
            'applyPendingMaintenanceAction',
            'copyDBClusterParameterGroup',
            'copyDBClusterSnapshot',
            'copyDBParameterGroup',
            'createDBCluster',
            'createDBClusterEndpoint',
            'createDBClusterParameterGroup',
            'createDBClusterSnapshot',
            'createDBInstance',
            'createDBParameterGroup',
            'createDBSubnetGroup',
            'createEventSubscription',
            'createGlobalCluster',
            'deleteDBCluster',
            'deleteDBClusterEndpoint',
            'deleteDBClusterParameterGroup',
            'deleteDBClusterSnapshot',
            'deleteDBInstance',
            'deleteDBParameterGroup',
            'deleteDBSubnetGroup',
            'deleteEventSubscription',
            'deleteGlobalCluster',
            'describeDBClusterEndpoints',
            'describeDBClusterParameterGroups',
            'describeDBClusterParameters',
            'describeDBClusterSnapshotAttributes',
            'describeDBClusterSnapshots',
            'describeDBClusters',
            'describeDBEngineVersions',
            'describeDBInstances',
            'describeDBParameterGroups',
            'describeDBParameters',
            'describeDBSubnetGroups',
            'describeEngineDefaultClusterParameters',
            'describeEngineDefaultParameters',
            'describeEventCategories',
            'describeEventSubscriptions',
            'describeEvents',
            'describeGlobalClusters',
            'describeOrderableDBInstanceOptions',
            'describePendingMaintenanceActions',
            'describeValidDBInstanceModifications',
            'failoverDBCluster',
            'failoverGlobalCluster',
            'listTagsForResource',
            'modifyDBCluster',
            'modifyDBClusterEndpoint',
            'modifyDBClusterParameterGroup',
            'modifyDBClusterSnapshotAttribute',
            'modifyDBInstance',
            'modifyDBParameterGroup',
            'modifyDBSubnetGroup',
            'modifyEventSubscription',
            'modifyGlobalCluster',
            'promoteReadReplicaDBCluster',
            'rebootDBInstance',
            'removeFromGlobalCluster',
            'removeRoleFromDBCluster',
            'removeSourceIdentifierFromSubscription',
            'removeTagsFromResource',
            'resetDBClusterParameterGroup',
            'resetDBParameterGroup',
            'restoreDBClusterFromSnapshot',
            'restoreDBClusterToPointInTime',
            'startDBCluster',
            'stopDBCluster',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addRoleToDBCluster' => $this->addRoleToDBCluster(),
            'addSourceIdentifierToSubscription' => $this->addSourceIdentifierToSubscription(),
            'addTagsToResource' => $this->addTagsToResource(),
            'applyPendingMaintenanceAction' => $this->applyPendingMaintenanceAction(),
            'copyDBClusterParameterGroup' => $this->copyDBClusterParameterGroup(),
            'copyDBClusterSnapshot' => $this->copyDBClusterSnapshot(),
            'copyDBParameterGroup' => $this->copyDBParameterGroup(),
            'createDBCluster' => $this->createDBCluster(),
            'createDBClusterEndpoint' => $this->createDBClusterEndpoint(),
            'createDBClusterParameterGroup' => $this->createDBClusterParameterGroup(),
            'createDBClusterSnapshot' => $this->createDBClusterSnapshot(),
            'createDBInstance' => $this->createDBInstance(),
            'createDBParameterGroup' => $this->createDBParameterGroup(),
            'createDBSubnetGroup' => $this->createDBSubnetGroup(),
            'createEventSubscription' => $this->createEventSubscription(),
            'createGlobalCluster' => $this->createGlobalCluster(),
            'deleteDBCluster' => $this->deleteDBCluster(),
            'deleteDBClusterEndpoint' => $this->deleteDBClusterEndpoint(),
            'deleteDBClusterParameterGroup' => $this->deleteDBClusterParameterGroup(),
            'deleteDBClusterSnapshot' => $this->deleteDBClusterSnapshot(),
            'deleteDBInstance' => $this->deleteDBInstance(),
            'deleteDBParameterGroup' => $this->deleteDBParameterGroup(),
            'deleteDBSubnetGroup' => $this->deleteDBSubnetGroup(),
            'deleteEventSubscription' => $this->deleteEventSubscription(),
            'deleteGlobalCluster' => $this->deleteGlobalCluster(),
            'describeDBClusterEndpoints' => $this->describeDBClusterEndpoints(),
            'describeDBClusterParameterGroups' => $this->describeDBClusterParameterGroups(),
            'describeDBClusterParameters' => $this->describeDBClusterParameters(),
            'describeDBClusterSnapshotAttributes' => $this->describeDBClusterSnapshotAttributes(),
            'describeDBClusterSnapshots' => $this->describeDBClusterSnapshots(),
            'describeDBClusters' => $this->describeDBClusters(),
            'describeDBEngineVersions' => $this->describeDBEngineVersions(),
            'describeDBInstances' => $this->describeDBInstances(),
            'describeDBParameterGroups' => $this->describeDBParameterGroups(),
            'describeDBParameters' => $this->describeDBParameters(),
            'describeDBSubnetGroups' => $this->describeDBSubnetGroups(),
            'describeEngineDefaultClusterParameters' => $this->describeEngineDefaultClusterParameters(),
            'describeEngineDefaultParameters' => $this->describeEngineDefaultParameters(),
            'describeEventCategories' => $this->describeEventCategories(),
            'describeEventSubscriptions' => $this->describeEventSubscriptions(),
            'describeEvents' => $this->describeEvents(),
            'describeGlobalClusters' => $this->describeGlobalClusters(),
            'describeOrderableDBInstanceOptions' => $this->describeOrderableDBInstanceOptions(),
            'describePendingMaintenanceActions' => $this->describePendingMaintenanceActions(),
            'describeValidDBInstanceModifications' => $this->describeValidDBInstanceModifications(),
            'failoverDBCluster' => $this->failoverDBCluster(),
            'failoverGlobalCluster' => $this->failoverGlobalCluster(),
            'listTagsForResource' => $this->listTagsForResource(),
            'modifyDBCluster' => $this->modifyDBCluster(),
            'modifyDBClusterEndpoint' => $this->modifyDBClusterEndpoint(),
            'modifyDBClusterParameterGroup' => $this->modifyDBClusterParameterGroup(),
            'modifyDBClusterSnapshotAttribute' => $this->modifyDBClusterSnapshotAttribute(),
            'modifyDBInstance' => $this->modifyDBInstance(),
            'modifyDBParameterGroup' => $this->modifyDBParameterGroup(),
            'modifyDBSubnetGroup' => $this->modifyDBSubnetGroup(),
            'modifyEventSubscription' => $this->modifyEventSubscription(),
            'modifyGlobalCluster' => $this->modifyGlobalCluster(),
            'promoteReadReplicaDBCluster' => $this->promoteReadReplicaDBCluster(),
            'rebootDBInstance' => $this->rebootDBInstance(),
            'removeFromGlobalCluster' => $this->removeFromGlobalCluster(),
            'removeRoleFromDBCluster' => $this->removeRoleFromDBCluster(),
            'removeSourceIdentifierFromSubscription' => $this->removeSourceIdentifierFromSubscription(),
            'removeTagsFromResource' => $this->removeTagsFromResource(),
            'resetDBClusterParameterGroup' => $this->resetDBClusterParameterGroup(),
            'resetDBParameterGroup' => $this->resetDBParameterGroup(),
            'restoreDBClusterFromSnapshot' => $this->restoreDBClusterFromSnapshot(),
            'restoreDBClusterToPointInTime' => $this->restoreDBClusterToPointInTime(),
            'startDBCluster' => $this->startDBCluster(),
            'stopDBCluster' => $this->stopDBCluster(),
        };
    }
    private function addRoleToDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function addSourceIdentifierToSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function addTagsToResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function applyPendingMaintenanceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePendingMaintenanceActions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingMaintenanceActionDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAppliedAfterDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForcedApplyDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptInStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentApplyDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function copyDBClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function copyDBClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function copyDBParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDBClusterEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointResourceIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('StaticMembers'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludedMembers'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointArn'),
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
            ]),
        ]);
    }
    private function createDBClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDBClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDBInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaSourceDBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBInstanceIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBClusterIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecondaryAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInfos'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TdeCredentialArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbInstancePort'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbiResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoringResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsKMSKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FQDN'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMRoleName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createDBParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDBSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createEventSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createGlobalCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterMembers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readers'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsWriter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDBClusterEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointResourceIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('StaticMembers'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludedMembers'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointArn'),
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
            ]),
        ]);
    }
    private function deleteDBClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDBClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDBInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaSourceDBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBInstanceIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBClusterIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecondaryAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInfos'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TdeCredentialArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbInstancePort'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbiResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoringResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsKMSKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FQDN'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMRoleName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function deleteDBParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDBSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEventSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteGlobalCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterMembers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readers'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsWriter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDBClusterEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpoints'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StaticMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludedMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointArn'),
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
                ]),
            ]),
        ]);
    }
    private function describeDBClusterParameterGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDBClusterParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('immediate'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending-reboot'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDBClusterSnapshotAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotAttributesResult'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotAttributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDBClusterSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshots'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDBClusterSnapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDBClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDBEngineVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBEngineVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBEngineDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBEngineVersionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultCharacterSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedCharacterSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidUpgradeTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedTimezones'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportableLogTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsLogExportsToCloudwatchLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsReadReplica'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsGlobalDatabases'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CharacterSetDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CharacterSetDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoUpgrade'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsMajorVersionUpgrade'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportsGlobalDatabases'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimezoneName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeDBInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBInstances'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaSourceDBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBInstanceIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBClusterIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecondaryAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInfos'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TdeCredentialArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbInstancePort'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbiResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoringResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsKMSKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FQDN'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMRoleName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeDBParameterGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDBParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('immediate'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending-reboot'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDBSubnetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeEngineDefaultClusterParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EngineDefaults'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyMethod'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('immediate'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending-reboot'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeEngineDefaultParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EngineDefaults'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyMethod'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('immediate'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending-reboot'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeEventCategories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesMapList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategories'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeEventSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Events'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategories'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('db-instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('db-parameter-group'),
                        new \PHPStan\Type\Constant\ConstantStringType('db-security-group'),
                        new \PHPStan\Type\Constant\ConstantStringType('db-snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('db-cluster'),
                        new \PHPStan\Type\Constant\ConstantStringType('db-cluster-snapshot'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeGlobalClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('GlobalClusters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterMembers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readers'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsWriter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeOrderableDBInstanceOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrderableDBInstanceOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Vpc'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsStorageEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsIops'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsEnhancedMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsIAMDatabaseAuthentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsPerformanceInsights'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinStorageSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxStorageSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinIopsPerDbInstance'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxIopsPerDbInstance'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinIopsPerGib'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxIopsPerGib'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportsGlobalDatabases'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePendingMaintenanceActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PendingMaintenanceActions'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingMaintenanceActionDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAppliedAfterDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForcedApplyDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptInStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentApplyDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeValidDBInstanceModifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ValidDBInstanceModificationsMessage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedIops'),
                        new \PHPStan\Type\Constant\ConstantStringType('IopsToStorageRatio'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('From'),
                            new \PHPStan\Type\Constant\ConstantStringType('To'),
                            new \PHPStan\Type\Constant\ConstantStringType('Step'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('From'),
                            new \PHPStan\Type\Constant\ConstantStringType('To'),
                            new \PHPStan\Type\Constant\ConstantStringType('Step'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('From'),
                            new \PHPStan\Type\Constant\ConstantStringType('To'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function failoverDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function failoverGlobalCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterMembers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readers'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsWriter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
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
    private function modifyDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyDBClusterEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointResourceIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('StaticMembers'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludedMembers'),
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterEndpointArn'),
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
            ]),
        ]);
    }
    private function modifyDBClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyDBClusterSnapshotAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotAttributesResult'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterSnapshotAttributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyDBInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaSourceDBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBInstanceIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBClusterIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecondaryAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInfos'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TdeCredentialArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbInstancePort'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbiResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoringResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsKMSKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FQDN'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMRoleName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function modifyDBParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyDBSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyEventSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyGlobalCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterMembers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readers'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsWriter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function promoteReadReplicaDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function rebootDBInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaSourceDBInstanceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBInstanceIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBClusterIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecondaryAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInfos'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TdeCredentialArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbInstancePort'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbiResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoringResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsKMSKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FQDN'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMRoleName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function removeFromGlobalCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterMembers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readers'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsWriter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function removeRoleFromDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeSourceIdentifierFromSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function removeTagsFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function resetDBClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resetDBParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBParameterGroupName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function restoreDBClusterFromSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function restoreDBClusterToPointInTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function stopDBCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DBCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBSubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('EarliestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupMemberships'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterMembers'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloneGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudwatchLogsExports'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticRestartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessV2ScalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IOOptimizedNextAllowedModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterOptionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingCloudwatchLogsExports'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}