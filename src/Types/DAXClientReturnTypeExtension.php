<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DAXClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DAX\DAXClient>
     */
    public function getClass(): string
    {
        return \Aws\DAX\DAXClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCluster',
            'createParameterGroup',
            'createSubnetGroup',
            'decreaseReplicationFactor',
            'deleteCluster',
            'deleteParameterGroup',
            'deleteSubnetGroup',
            'describeClusters',
            'describeDefaultParameters',
            'describeEvents',
            'describeParameterGroups',
            'describeParameters',
            'describeSubnetGroups',
            'increaseReplicationFactor',
            'listTags',
            'rebootNode',
            'tagResource',
            'untagResource',
            'updateCluster',
            'updateParameterGroup',
            'updateSubnetGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCluster' => $this->createCluster(),
            'createParameterGroup' => $this->createParameterGroup(),
            'createSubnetGroup' => $this->createSubnetGroup(),
            'decreaseReplicationFactor' => $this->decreaseReplicationFactor(),
            'deleteCluster' => $this->deleteCluster(),
            'deleteParameterGroup' => $this->deleteParameterGroup(),
            'deleteSubnetGroup' => $this->deleteSubnetGroup(),
            'describeClusters' => $this->describeClusters(),
            'describeDefaultParameters' => $this->describeDefaultParameters(),
            'describeEvents' => $this->describeEvents(),
            'describeParameterGroups' => $this->describeParameterGroups(),
            'describeParameters' => $this->describeParameters(),
            'describeSubnetGroups' => $this->describeSubnetGroups(),
            'increaseReplicationFactor' => $this->increaseReplicationFactor(),
            'listTags' => $this->listTags(),
            'rebootNode' => $this->rebootNode(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCluster' => $this->updateCluster(),
            'updateParameterGroup' => $this->updateParameterGroup(),
            'updateSubnetGroup' => $this->updateSubnetGroup(),
        };
    }
    private function createCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterDiscoveryEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpointEncryptionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function decreaseReplicationFactor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterDiscoveryEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpointEncryptionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterDiscoveryEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpointEncryptionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletionMessage'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletionMessage'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Clusters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterDiscoveryEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToRemove'),
                        new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpointEncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToReboot'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeDefaultParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeTypeSpecificValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NODE_TYPE_SPECIFIC'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONDITIONAL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMMEDIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_REBOOT'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Events'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLUSTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_GROUP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeParameterGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeTypeSpecificValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NODE_TYPE_SPECIFIC'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONDITIONAL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMMEDIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUIRES_REBOOT'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeSubnetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function increaseReplicationFactor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterDiscoveryEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpointEncryptionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
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
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rebootNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterDiscoveryEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpointEncryptionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
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
    private function updateCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterDiscoveryEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToRemove'),
                    new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSEDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpointEncryptionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TopicStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeIdsToReboot'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
}