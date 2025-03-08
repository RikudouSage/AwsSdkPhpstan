<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KafkaClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Kafka\KafkaClient>
     */
    public function getClass(): string
    {
        return \Aws\Kafka\KafkaClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchAssociateScramSecret',
            'createCluster',
            'createClusterV2',
            'createConfiguration',
            'createReplicator',
            'createVpcConnection',
            'deleteCluster',
            'deleteConfiguration',
            'deleteReplicator',
            'deleteVpcConnection',
            'describeCluster',
            'describeClusterV2',
            'describeClusterOperation',
            'describeClusterOperationV2',
            'describeConfiguration',
            'describeConfigurationRevision',
            'describeReplicator',
            'describeVpcConnection',
            'batchDisassociateScramSecret',
            'getBootstrapBrokers',
            'getCompatibleKafkaVersions',
            'listClusterOperations',
            'listClusterOperationsV2',
            'listClusters',
            'listClustersV2',
            'listConfigurationRevisions',
            'listConfigurations',
            'listKafkaVersions',
            'listNodes',
            'listReplicators',
            'listScramSecrets',
            'listTagsForResource',
            'listClientVpcConnections',
            'listVpcConnections',
            'rejectClientVpcConnection',
            'deleteClusterPolicy',
            'getClusterPolicy',
            'putClusterPolicy',
            'rebootBroker',
            'tagResource',
            'untagResource',
            'updateBrokerCount',
            'updateBrokerType',
            'updateBrokerStorage',
            'updateConfiguration',
            'updateClusterConfiguration',
            'updateClusterKafkaVersion',
            'updateConnectivity',
            'updateMonitoring',
            'updateReplicationInfo',
            'updateSecurity',
            'updateStorage',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchAssociateScramSecret' => $this->batchAssociateScramSecret(),
            'createCluster' => $this->createCluster(),
            'createClusterV2' => $this->createClusterV2(),
            'createConfiguration' => $this->createConfiguration(),
            'createReplicator' => $this->createReplicator(),
            'createVpcConnection' => $this->createVpcConnection(),
            'deleteCluster' => $this->deleteCluster(),
            'deleteConfiguration' => $this->deleteConfiguration(),
            'deleteReplicator' => $this->deleteReplicator(),
            'deleteVpcConnection' => $this->deleteVpcConnection(),
            'describeCluster' => $this->describeCluster(),
            'describeClusterV2' => $this->describeClusterV2(),
            'describeClusterOperation' => $this->describeClusterOperation(),
            'describeClusterOperationV2' => $this->describeClusterOperationV2(),
            'describeConfiguration' => $this->describeConfiguration(),
            'describeConfigurationRevision' => $this->describeConfigurationRevision(),
            'describeReplicator' => $this->describeReplicator(),
            'describeVpcConnection' => $this->describeVpcConnection(),
            'batchDisassociateScramSecret' => $this->batchDisassociateScramSecret(),
            'getBootstrapBrokers' => $this->getBootstrapBrokers(),
            'getCompatibleKafkaVersions' => $this->getCompatibleKafkaVersions(),
            'listClusterOperations' => $this->listClusterOperations(),
            'listClusterOperationsV2' => $this->listClusterOperationsV2(),
            'listClusters' => $this->listClusters(),
            'listClustersV2' => $this->listClustersV2(),
            'listConfigurationRevisions' => $this->listConfigurationRevisions(),
            'listConfigurations' => $this->listConfigurations(),
            'listKafkaVersions' => $this->listKafkaVersions(),
            'listNodes' => $this->listNodes(),
            'listReplicators' => $this->listReplicators(),
            'listScramSecrets' => $this->listScramSecrets(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listClientVpcConnections' => $this->listClientVpcConnections(),
            'listVpcConnections' => $this->listVpcConnections(),
            'rejectClientVpcConnection' => $this->rejectClientVpcConnection(),
            'deleteClusterPolicy' => $this->deleteClusterPolicy(),
            'getClusterPolicy' => $this->getClusterPolicy(),
            'putClusterPolicy' => $this->putClusterPolicy(),
            'rebootBroker' => $this->rebootBroker(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateBrokerCount' => $this->updateBrokerCount(),
            'updateBrokerType' => $this->updateBrokerType(),
            'updateBrokerStorage' => $this->updateBrokerStorage(),
            'updateConfiguration' => $this->updateConfiguration(),
            'updateClusterConfiguration' => $this->updateClusterConfiguration(),
            'updateClusterKafkaVersion' => $this->updateClusterKafkaVersion(),
            'updateConnectivity' => $this->updateConnectivity(),
            'updateMonitoring' => $this->updateMonitoring(),
            'updateReplicationInfo' => $this->updateReplicationInfo(),
            'updateSecurity' => $this->updateSecurity(),
            'updateStorage' => $this->updateStorage(),
        };
    }
    private function batchAssociateScramSecret(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedScramSecrets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('HEALING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBOOTING_BROKER'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
            ]),
        ]);
    }
    private function createClusterV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('HEALING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBOOTING_BROKER'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                ]),
            ]),
        ]);
    }
    private function createConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createReplicator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorName'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function createVpcConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientSubnets'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('HEALING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBOOTING_BROKER'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
            ]),
        ]);
    }
    private function deleteConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteReplicator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteVpcConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                ]),
            ]),
        ]);
    }
    private function describeCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BrokerNodeGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBrokerSoftwareInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectString'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectStringTls'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerActionStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerAZDistribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientSubnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneIds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EbsStorageInfo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                            new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL_ACTION_REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_RECOMMENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeClusterV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provisioned'),
                    new \PHPStan\Type\Constant\ConstantStringType('Serverless'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerNodeGroupInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentBrokerSoftwareInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectString'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectStringTls'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerActionStatus'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerAZDistribution'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSubnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZoneIds'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EbsStorageInfo'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL_ACTION_REQUIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_RECOMMENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeClusterOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClientRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationSteps'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceClusterInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetClusterInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StepInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('StepName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StepStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerEBSVolumeInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerCountUpdateInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaBrokerNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeGB'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedBrokerIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeletedBrokerIds'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerEBSVolumeInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerCountUpdateInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaBrokerNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeGB'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedBrokerIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeletedBrokerIds'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserIdentity'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWSACCOUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWSSERVICE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeClusterOperationV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provisioned'),
                    new \PHPStan\Type\Constant\ConstantStringType('Serverless'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OperationSteps'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceClusterInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetClusterInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StepInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('StepName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StepStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerEBSVolumeInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerCountUpdateInfo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KafkaBrokerNodeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeGB'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                                new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                                new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedBrokerIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeletedBrokerIds'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerEBSVolumeInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerCountUpdateInfo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KafkaBrokerNodeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeGB'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                                new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                                new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedBrokerIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeletedBrokerIds'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserIdentity'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSACCOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSSERVICE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserIdentity'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSACCOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSSERVICE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('KafkaVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function describeConfigurationRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerProperties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function describeReplicator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('IsReplicatorReference'),
                new \PHPStan\Type\Constant\ConstantStringType('KafkaClusters'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorName'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorState'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('StateInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AmazonMskCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('KafkaClusterAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MskClusterArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupReplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceKafkaClusterAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetCompressionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetKafkaClusterAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicReplication'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupsToExclude'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupsToReplicate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetectAndCopyNewConsumerGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('SynchroniseConsumerGroupOffsets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LZ4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZSTD'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CopyAccessControlListsForTopics'),
                        new \PHPStan\Type\Constant\ConstantStringType('CopyTopicConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetectAndCopyNewTopics'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicNameConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicsToExclude'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicsToReplicate'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('EARLIEST'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIXED_WITH_SOURCE_CLUSTER_ALIAS'),
                                new \PHPStan\Type\Constant\ConstantStringType('IDENTICAL'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeVpcConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function batchDisassociateScramSecret(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedScramSecrets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getBootstrapBrokers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerString'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringPublicSaslIam'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringPublicSaslScram'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringPublicTls'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringTls'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringSaslScram'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringSaslIam'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringVpcConnectivityTls'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringVpcConnectivitySaslScram'),
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapBrokerStringVpcConnectivitySaslIam'),
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
    private function getCompatibleKafkaVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleKafkaVersions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetVersions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listClusterOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClientRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationSteps'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceClusterInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetClusterInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StepInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('StepName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StepStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerEBSVolumeInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerCountUpdateInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaBrokerNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeGB'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedBrokerIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeletedBrokerIds'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerEBSVolumeInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerCountUpdateInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaBrokerNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeGB'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedBrokerIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeletedBrokerIds'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserIdentity'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWSACCOUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWSSERVICE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClusterOperationsV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BrokerNodeGroupInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBrokerSoftwareInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectString'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectStringTls'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerActionStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerAZDistribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientSubnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneIds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EbsStorageInfo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                            new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL_ACTION_REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_RECOMMENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClustersV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveOperationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provisioned'),
                    new \PHPStan\Type\Constant\ConstantStringType('Serverless'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVERLESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING_BROKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerNodeGroupInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentBrokerSoftwareInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenMonitoring'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectString'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZookeeperConnectStringTls'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerActionStatus'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerAZDistribution'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSubnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectivityInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZoneIds'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EbsStorageInfo'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeThroughput'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectivity'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_BROKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_TOPIC_PER_PARTITION'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prometheus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('JmxExporter'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeExporter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnabledInBroker'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BrokerLogs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('Firehose'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIERED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL_ACTION_REQUIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_RECOMMENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfigurationRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Revisions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('KafkaVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKafkaVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KafkaVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeInfoList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AddedToClusterTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('BrokerNodeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ControllerNodeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZookeeperNodeInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttachedENIId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientSubnet'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientVpcIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentBrokerSoftwareInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('KafkaVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('BROKER'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttachedENIId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientVpcIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZookeeperId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZookeeperVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listReplicators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Replicators'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsReplicatorReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('KafkaClustersSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationInfoSummaryList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicatorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicatorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicatorResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicatorState'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonMskCluster'),
                        new \PHPStan\Type\Constant\ConstantStringType('KafkaClusterAlias'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MskClusterArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceKafkaClusterAlias'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetKafkaClusterAlias'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listScramSecrets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretArnList'),
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
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listClientVpcConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientVpcConnections'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listVpcConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnections'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function rejectClientVpcConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteClusterPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getClusterPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putClusterPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rebootBroker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function updateBrokerCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBrokerType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBrokerStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateClusterConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateClusterKafkaVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConnectivity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMonitoring(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateReplicationInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatorState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function updateSecurity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterOperationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}