<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DocDBElasticClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DocDBElastic\DocDBElasticClient>
     */
    public function getClass(): string
    {
        return \Aws\DocDBElastic\DocDBElasticClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'applyPendingMaintenanceAction',
            'copyClusterSnapshot',
            'createCluster',
            'createClusterSnapshot',
            'deleteCluster',
            'deleteClusterSnapshot',
            'getCluster',
            'getClusterSnapshot',
            'getPendingMaintenanceAction',
            'listClusterSnapshots',
            'listClusters',
            'listPendingMaintenanceActions',
            'listTagsForResource',
            'restoreClusterFromSnapshot',
            'startCluster',
            'stopCluster',
            'tagResource',
            'untagResource',
            'updateCluster',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'applyPendingMaintenanceAction' => $this->applyPendingMaintenanceAction(),
            'copyClusterSnapshot' => $this->copyClusterSnapshot(),
            'createCluster' => $this->createCluster(),
            'createClusterSnapshot' => $this->createClusterSnapshot(),
            'deleteCluster' => $this->deleteCluster(),
            'deleteClusterSnapshot' => $this->deleteClusterSnapshot(),
            'getCluster' => $this->getCluster(),
            'getClusterSnapshot' => $this->getClusterSnapshot(),
            'getPendingMaintenanceAction' => $this->getPendingMaintenanceAction(),
            'listClusterSnapshots' => $this->listClusterSnapshots(),
            'listClusters' => $this->listClusters(),
            'listPendingMaintenanceActions' => $this->listPendingMaintenanceActions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'restoreClusterFromSnapshot' => $this->restoreClusterFromSnapshot(),
            'startCluster' => $this->startCluster(),
            'stopCluster' => $this->stopCluster(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCluster' => $this->updateCluster(),
        };
    }
    private function applyPendingMaintenanceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourcePendingMaintenanceAction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pendingMaintenanceActionDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoAppliedAfterDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentApplyDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('forcedApplyDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('optInStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function copyClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRET_ARN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('shardId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRET_ARN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('shardId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRET_ARN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('shardId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getPendingMaintenanceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourcePendingMaintenanceAction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pendingMaintenanceActionDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoAppliedAfterDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentApplyDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('forcedApplyDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('optInStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listClusterSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('snapshots'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotCreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clusters'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPendingMaintenanceActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resourcePendingMaintenanceActions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pendingMaintenanceActionDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('autoAppliedAfterDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('currentApplyDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('forcedApplyDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('optInStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function restoreClusterFromSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRET_ARN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('shardId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function startCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRET_ARN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('shardId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function stopCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRET_ARN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('shardId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
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
    private function updateCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('adminUserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    new \PHPStan\Type\Constant\ConstantStringType('backupRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shardInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRET_ARN'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('shardId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SECURITY_GROUP_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_SECRET_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_VPC_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLITTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
}