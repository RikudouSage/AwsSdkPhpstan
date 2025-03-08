<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ElastiCacheClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ElastiCache\ElastiCacheClient>
     */
    public function getClass(): string
    {
        return \Aws\ElastiCache\ElastiCacheClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTagsToResource',
            'authorizeCacheSecurityGroupIngress',
            'batchApplyUpdateAction',
            'batchStopUpdateAction',
            'completeMigration',
            'copyServerlessCacheSnapshot',
            'copySnapshot',
            'createCacheCluster',
            'createCacheParameterGroup',
            'createCacheSecurityGroup',
            'createCacheSubnetGroup',
            'createGlobalReplicationGroup',
            'createReplicationGroup',
            'createServerlessCache',
            'createServerlessCacheSnapshot',
            'createSnapshot',
            'createUser',
            'createUserGroup',
            'decreaseNodeGroupsInGlobalReplicationGroup',
            'decreaseReplicaCount',
            'deleteCacheCluster',
            'deleteCacheParameterGroup',
            'deleteCacheSecurityGroup',
            'deleteCacheSubnetGroup',
            'deleteGlobalReplicationGroup',
            'deleteReplicationGroup',
            'deleteServerlessCache',
            'deleteServerlessCacheSnapshot',
            'deleteSnapshot',
            'deleteUser',
            'deleteUserGroup',
            'describeCacheClusters',
            'describeCacheEngineVersions',
            'describeCacheParameterGroups',
            'describeCacheParameters',
            'describeCacheSecurityGroups',
            'describeCacheSubnetGroups',
            'describeEngineDefaultParameters',
            'describeEvents',
            'describeGlobalReplicationGroups',
            'describeReplicationGroups',
            'describeReservedCacheNodes',
            'describeReservedCacheNodesOfferings',
            'describeServerlessCacheSnapshots',
            'describeServerlessCaches',
            'describeServiceUpdates',
            'describeSnapshots',
            'describeUpdateActions',
            'describeUserGroups',
            'describeUsers',
            'disassociateGlobalReplicationGroup',
            'exportServerlessCacheSnapshot',
            'failoverGlobalReplicationGroup',
            'increaseNodeGroupsInGlobalReplicationGroup',
            'increaseReplicaCount',
            'listAllowedNodeTypeModifications',
            'listTagsForResource',
            'modifyCacheCluster',
            'modifyCacheParameterGroup',
            'modifyCacheSubnetGroup',
            'modifyGlobalReplicationGroup',
            'modifyReplicationGroup',
            'modifyReplicationGroupShardConfiguration',
            'modifyServerlessCache',
            'modifyUser',
            'modifyUserGroup',
            'purchaseReservedCacheNodesOffering',
            'rebalanceSlotsInGlobalReplicationGroup',
            'rebootCacheCluster',
            'removeTagsFromResource',
            'resetCacheParameterGroup',
            'revokeCacheSecurityGroupIngress',
            'startMigration',
            'testFailover',
            'testMigration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTagsToResource' => $this->addTagsToResource(),
            'authorizeCacheSecurityGroupIngress' => $this->authorizeCacheSecurityGroupIngress(),
            'batchApplyUpdateAction' => $this->batchApplyUpdateAction(),
            'batchStopUpdateAction' => $this->batchStopUpdateAction(),
            'completeMigration' => $this->completeMigration(),
            'copyServerlessCacheSnapshot' => $this->copyServerlessCacheSnapshot(),
            'copySnapshot' => $this->copySnapshot(),
            'createCacheCluster' => $this->createCacheCluster(),
            'createCacheParameterGroup' => $this->createCacheParameterGroup(),
            'createCacheSecurityGroup' => $this->createCacheSecurityGroup(),
            'createCacheSubnetGroup' => $this->createCacheSubnetGroup(),
            'createGlobalReplicationGroup' => $this->createGlobalReplicationGroup(),
            'createReplicationGroup' => $this->createReplicationGroup(),
            'createServerlessCache' => $this->createServerlessCache(),
            'createServerlessCacheSnapshot' => $this->createServerlessCacheSnapshot(),
            'createSnapshot' => $this->createSnapshot(),
            'createUser' => $this->createUser(),
            'createUserGroup' => $this->createUserGroup(),
            'decreaseNodeGroupsInGlobalReplicationGroup' => $this->decreaseNodeGroupsInGlobalReplicationGroup(),
            'decreaseReplicaCount' => $this->decreaseReplicaCount(),
            'deleteCacheCluster' => $this->deleteCacheCluster(),
            'deleteCacheParameterGroup' => $this->deleteCacheParameterGroup(),
            'deleteCacheSecurityGroup' => $this->deleteCacheSecurityGroup(),
            'deleteCacheSubnetGroup' => $this->deleteCacheSubnetGroup(),
            'deleteGlobalReplicationGroup' => $this->deleteGlobalReplicationGroup(),
            'deleteReplicationGroup' => $this->deleteReplicationGroup(),
            'deleteServerlessCache' => $this->deleteServerlessCache(),
            'deleteServerlessCacheSnapshot' => $this->deleteServerlessCacheSnapshot(),
            'deleteSnapshot' => $this->deleteSnapshot(),
            'deleteUser' => $this->deleteUser(),
            'deleteUserGroup' => $this->deleteUserGroup(),
            'describeCacheClusters' => $this->describeCacheClusters(),
            'describeCacheEngineVersions' => $this->describeCacheEngineVersions(),
            'describeCacheParameterGroups' => $this->describeCacheParameterGroups(),
            'describeCacheParameters' => $this->describeCacheParameters(),
            'describeCacheSecurityGroups' => $this->describeCacheSecurityGroups(),
            'describeCacheSubnetGroups' => $this->describeCacheSubnetGroups(),
            'describeEngineDefaultParameters' => $this->describeEngineDefaultParameters(),
            'describeEvents' => $this->describeEvents(),
            'describeGlobalReplicationGroups' => $this->describeGlobalReplicationGroups(),
            'describeReplicationGroups' => $this->describeReplicationGroups(),
            'describeReservedCacheNodes' => $this->describeReservedCacheNodes(),
            'describeReservedCacheNodesOfferings' => $this->describeReservedCacheNodesOfferings(),
            'describeServerlessCacheSnapshots' => $this->describeServerlessCacheSnapshots(),
            'describeServerlessCaches' => $this->describeServerlessCaches(),
            'describeServiceUpdates' => $this->describeServiceUpdates(),
            'describeSnapshots' => $this->describeSnapshots(),
            'describeUpdateActions' => $this->describeUpdateActions(),
            'describeUserGroups' => $this->describeUserGroups(),
            'describeUsers' => $this->describeUsers(),
            'disassociateGlobalReplicationGroup' => $this->disassociateGlobalReplicationGroup(),
            'exportServerlessCacheSnapshot' => $this->exportServerlessCacheSnapshot(),
            'failoverGlobalReplicationGroup' => $this->failoverGlobalReplicationGroup(),
            'increaseNodeGroupsInGlobalReplicationGroup' => $this->increaseNodeGroupsInGlobalReplicationGroup(),
            'increaseReplicaCount' => $this->increaseReplicaCount(),
            'listAllowedNodeTypeModifications' => $this->listAllowedNodeTypeModifications(),
            'listTagsForResource' => $this->listTagsForResource(),
            'modifyCacheCluster' => $this->modifyCacheCluster(),
            'modifyCacheParameterGroup' => $this->modifyCacheParameterGroup(),
            'modifyCacheSubnetGroup' => $this->modifyCacheSubnetGroup(),
            'modifyGlobalReplicationGroup' => $this->modifyGlobalReplicationGroup(),
            'modifyReplicationGroup' => $this->modifyReplicationGroup(),
            'modifyReplicationGroupShardConfiguration' => $this->modifyReplicationGroupShardConfiguration(),
            'modifyServerlessCache' => $this->modifyServerlessCache(),
            'modifyUser' => $this->modifyUser(),
            'modifyUserGroup' => $this->modifyUserGroup(),
            'purchaseReservedCacheNodesOffering' => $this->purchaseReservedCacheNodesOffering(),
            'rebalanceSlotsInGlobalReplicationGroup' => $this->rebalanceSlotsInGlobalReplicationGroup(),
            'rebootCacheCluster' => $this->rebootCacheCluster(),
            'removeTagsFromResource' => $this->removeTagsFromResource(),
            'resetCacheParameterGroup' => $this->resetCacheParameterGroup(),
            'revokeCacheSecurityGroupIngress' => $this->revokeCacheSecurityGroupIngress(),
            'startMigration' => $this->startMigration(),
            'testFailover' => $this->testFailover(),
            'testMigration' => $this->testMigration(),
        };
    }
    private function addTagsToResource(): ?\PHPStan\Type\Type
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
    private function authorizeCacheSecurityGroupIngress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchApplyUpdateAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProcessedUpdateActions'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedUpdateActions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateActionStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('not-applied'),
                        new \PHPStan\Type\Constant\ConstantStringType('waiting-to-start'),
                        new \PHPStan\Type\Constant\ConstantStringType('in-progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduling'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('not-applicable'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchStopUpdateAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProcessedUpdateActions'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedUpdateActions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateActionStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('not-applied'),
                        new \PHPStan\Type\Constant\ConstantStringType('waiting-to-start'),
                        new \PHPStan\Type\Constant\ConstantStringType('in-progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduling'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('not-applicable'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function completeMigration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function copyServerlessCacheSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesUsedForCache'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function copySnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeSnapshots'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
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
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaAvailabilityZones'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaOutpostArns'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createCacheCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientDownloadLandingPage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupLogDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToRemove'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceCacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createCacheParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsGlobal'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createCacheSecurityGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createCacheSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedNetworkTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetOutpost'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedNetworkTypes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetOutpostArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                            new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createServerlessCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCache'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheUsageLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('DailySnapshotTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECPUPerSecond'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createServerlessCacheSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesUsedForCache'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeSnapshots'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
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
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaAvailabilityZones'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaOutpostArns'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessString'),
                new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordCount'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('password'),
                        new \PHPStan\Type\Constant\ConstantStringType('no-password'),
                        new \PHPStan\Type\Constant\ConstantStringType('iam'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUserGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                new \PHPStan\Type\Constant\ConstantStringType('UserIds'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingChanges'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCaches'),
                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserIdsToAdd'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function decreaseNodeGroupsInGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function decreaseReplicaCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteCacheCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientDownloadLandingPage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupLogDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToRemove'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceCacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteCacheParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCacheSecurityGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCacheSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteServerlessCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCache'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheUsageLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('DailySnapshotTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECPUPerSecond'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteServerlessCacheSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesUsedForCache'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeSnapshots'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
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
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaAvailabilityZones'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaOutpostArns'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessString'),
                new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordCount'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('password'),
                        new \PHPStan\Type\Constant\ConstantStringType('no-password'),
                        new \PHPStan\Type\Constant\ConstantStringType('iam'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteUserGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                new \PHPStan\Type\Constant\ConstantStringType('UserIds'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingChanges'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCaches'),
                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserIdsToAdd'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeCacheClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheClusters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientDownloadLandingPage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupLogDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToRemove'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceCacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeCacheEngineVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheEngineVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheEngineDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheEngineVersionDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeCacheParameterGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsGlobal'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeCacheParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheNodeTypeSpecificParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeType'),
                ], [
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
                        new \PHPStan\Type\Constant\ConstantStringType('requires-reboot'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeTypeSpecificValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('immediate'),
                        new \PHPStan\Type\Constant\ConstantStringType('requires-reboot'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeCacheSecurityGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeCacheSubnetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedNetworkTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetOutpost'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedNetworkTypes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetOutpostArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                            new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
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
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeTypeSpecificParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeType'),
                    ], [
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
                            new \PHPStan\Type\Constant\ConstantStringType('requires-reboot'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeTypeSpecificValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('immediate'),
                            new \PHPStan\Type\Constant\ConstantStringType('requires-reboot'),
                        ]),
                    ]),
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
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('cache-cluster'),
                        new \PHPStan\Type\Constant\ConstantStringType('cache-parameter-group'),
                        new \PHPStan\Type\Constant\ConstantStringType('cache-security-group'),
                        new \PHPStan\Type\Constant\ConstantStringType('cache-subnet-group'),
                        new \PHPStan\Type\Constant\ConstantStringType('replication-group'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverless-cache'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverless-cache-snapshot'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('user-group'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeGlobalReplicationGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeReplicationGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeReservedCacheNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNodes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNodeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNodesOfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeReservedCacheNodesOfferings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNodesOfferings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNodesOfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeServerlessCacheSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshots'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesUsedForCache'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeServerlessCaches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCaches'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheUsageLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('DailySnapshotTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECPUPerSecond'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeServiceUpdates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateReleaseDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateEndDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateRecommendedApplyByDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoUpdateAfterRecommendedApplyByDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedUpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('important'),
                        new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('low'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('expired'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('security-update'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Snapshots'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeSnapshots'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
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
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaAvailabilityZones'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrimaryOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaOutpostArns'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeUpdateActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateActions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateReleaseDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateRecommendedApplyByDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUpdateType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateActionAvailableDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateActionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodesUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateActionStatusModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlaMet'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroupUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('important'),
                        new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('low'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('expired'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('security-update'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('not-applied'),
                        new \PHPStan\Type\Constant\ConstantStringType('waiting-to-start'),
                        new \PHPStan\Type\Constant\ConstantStringType('in-progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduling'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('not-applicable'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                        new \PHPStan\Type\Constant\ConstantStringType('n/a'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMemberUpdateStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeDeletionDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateStartDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateEndDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateInitiatedBy'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateInitiatedDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateStatusModifiedDate'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('not-applied'),
                                new \PHPStan\Type\Constant\ConstantStringType('waiting-to-start'),
                                new \PHPStan\Type\Constant\ConstantStringType('in-progress'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('complete'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('system'),
                                new \PHPStan\Type\Constant\ConstantStringType('customer'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeDeletionDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateStartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateEndDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateInitiatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateInitiatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeUpdateStatusModifiedDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('not-applied'),
                            new \PHPStan\Type\Constant\ConstantStringType('waiting-to-start'),
                            new \PHPStan\Type\Constant\ConstantStringType('in-progress'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('complete'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('system'),
                            new \PHPStan\Type\Constant\ConstantStringType('customer'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeUserGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingChanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCaches'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UserIdsToRemove'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserIdsToAdd'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessString'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('PasswordCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('password'),
                            new \PHPStan\Type\Constant\ConstantStringType('no-password'),
                            new \PHPStan\Type\Constant\ConstantStringType('iam'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportServerlessCacheSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheSnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesUsedForCache'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function failoverGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function increaseNodeGroupsInGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function increaseReplicaCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAllowedNodeTypeModifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScaleUpModifications'),
                new \PHPStan\Type\Constant\ConstantStringType('ScaleDownModifications'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function modifyCacheCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientDownloadLandingPage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupLogDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToRemove'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceCacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyCacheParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyCacheSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedNetworkTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetOutpost'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedNetworkTypes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetOutpostArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                            new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyReplicationGroupShardConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyServerlessCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCache'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerlessCacheName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('MajorEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheUsageLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('DailySnapshotTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECPUPerSecond'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('GB'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessString'),
                new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('PasswordCount'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('password'),
                        new \PHPStan\Type\Constant\ConstantStringType('no-password'),
                        new \PHPStan\Type\Constant\ConstantStringType('iam'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyUserGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                new \PHPStan\Type\Constant\ConstantStringType('UserIds'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingChanges'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerlessCaches'),
                new \PHPStan\Type\Constant\ConstantStringType('ARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserIdsToAdd'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function purchaseReservedCacheNodesOffering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNodeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedCacheNodesOfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function rebalanceSlotsInGlobalReplicationGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Members'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function rebootCacheCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientDownloadLandingPage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupLogDeliveryEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumCacheNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToRemove'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheNodeCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceCacheNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function removeTagsFromResource(): ?\PHPStan\Type\Type
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
    private function resetCacheParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheParameterGroupName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function revokeCacheSecurityGroupIngress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheSecurityGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startMigration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function testFailover(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function testMigration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshottingClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailover'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheNodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthTokenLastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberClustersOutpostArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationGroupCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTiering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpDiscovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalReplicationGroupMemberRole'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomaticFailoverStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resharding'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthTokenStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SlotMigration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserGroupIdsToRemove'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                                new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeGroupMembers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CacheClusterId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CacheNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreferredOutpostArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('slow-log'),
                            new \PHPStan\Type\Constant\ConstantStringType('engine-log'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudwatch-logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('kinesis-firehose'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabling'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        new \PHPStan\Type\Constant\ConstantStringType('dual_stack'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('preferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatible'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}