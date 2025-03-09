<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KeyspacesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Keyspaces\KeyspacesClient>
     */
    public function getClass(): string
    {
        return \Aws\Keyspaces\KeyspacesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createKeyspace',
            'createTable',
            'createType',
            'deleteKeyspace',
            'deleteTable',
            'deleteType',
            'getKeyspace',
            'getTable',
            'getTableAutoScalingSettings',
            'getType',
            'listKeyspaces',
            'listTables',
            'listTagsForResource',
            'listTypes',
            'restoreTable',
            'tagResource',
            'untagResource',
            'updateKeyspace',
            'updateTable',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createKeyspace' => $this->createKeyspace(),
            'createTable' => $this->createTable(),
            'createType' => $this->createType(),
            'deleteKeyspace' => $this->deleteKeyspace(),
            'deleteTable' => $this->deleteTable(),
            'deleteType' => $this->deleteType(),
            'getKeyspace' => $this->getKeyspace(),
            'getTable' => $this->getTable(),
            'getTableAutoScalingSettings' => $this->getTableAutoScalingSettings(),
            'getType' => $this->getType(),
            'listKeyspaces' => $this->listKeyspaces(),
            'listTables' => $this->listTables(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTypes' => $this->listTypes(),
            'restoreTable' => $this->restoreTable(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateKeyspace' => $this->updateKeyspace(),
            'updateTable' => $this->updateTable(),
        };
    }
    private function createKeyspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keyspaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('typeName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteKeyspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keyspaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('typeName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKeyspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keyspaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationRegions'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationGroupStatuses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE_REGION'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI_REGION'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyspaceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('tablesReplicationProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keyspaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('capacitySpecification'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionSpecification'),
                new \PHPStan\Type\Constant\ConstantStringType('pointInTimeRecovery'),
                new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultTimeToLive'),
                new \PHPStan\Type\Constant\ConstantStringType('comment'),
                new \PHPStan\Type\Constant\ConstantStringType('clientSideTimestamps'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaSpecifications'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('allColumns'),
                    new \PHPStan\Type\Constant\ConstantStringType('partitionKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusteringKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('staticColumns'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('orderBy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                                new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('throughputMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('readCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('writeCapacityUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateToPayPerRequestTimestamp'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_KMS_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('earliestRestorableTimestamp'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacitySpecification'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE_ENCRYPTION_CREDENTIALS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('throughputMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('readCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('writeCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdateToPayPerRequestTimestamp'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PAY_PER_REQUEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getTableAutoScalingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keyspaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('autoScalingSpecification'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaSpecifications'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('writeCapacityAutoScaling'),
                    new \PHPStan\Type\Constant\ConstantStringType('readCapacityAutoScaling'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('scalingPolicy'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetTrackingScalingPolicyConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('disableScaleIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('scaleInCooldown'),
                                new \PHPStan\Type\Constant\ConstantStringType('scaleOutCooldown'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetValue'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('scalingPolicy'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetTrackingScalingPolicyConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('disableScaleIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('scaleInCooldown'),
                                new \PHPStan\Type\Constant\ConstantStringType('scaleOutCooldown'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetValue'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingSpecification'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('writeCapacityAutoScaling'),
                            new \PHPStan\Type\Constant\ConstantStringType('readCapacityAutoScaling'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('autoScalingDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('minimumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('maximumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('scalingPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetTrackingScalingPolicyConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('disableScaleIn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scaleInCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scaleOutCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetValue'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('autoScalingDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('minimumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('maximumUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('scalingPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetTrackingScalingPolicyConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('disableScaleIn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scaleInCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scaleOutCooldown'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetValue'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keyspaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                new \PHPStan\Type\Constant\ConstantStringType('fieldDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('directReferringTables'),
                new \PHPStan\Type\Constant\ConstantStringType('directParentTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('maxNestingDepth'),
                new \PHPStan\Type\Constant\ConstantStringType('keyspaceArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKeyspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('keyspaces'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('keyspaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationRegions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTI_REGION'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tables'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('keyspaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
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
        ]);
    }
    private function listTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('types'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function restoreTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('restoredTableARN'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateKeyspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}