<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class OpsWorksCMClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\OpsWorksCM\OpsWorksCMClient>
     */
    public function getClass(): string
    {
        return \Aws\OpsWorksCM\OpsWorksCMClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateNode',
            'createBackup',
            'createServer',
            'deleteBackup',
            'deleteServer',
            'describeAccountAttributes',
            'describeBackups',
            'describeEvents',
            'describeNodeAssociationStatus',
            'describeServers',
            'disassociateNode',
            'exportServerEngineAttribute',
            'listTagsForResource',
            'restoreServer',
            'startMaintenance',
            'tagResource',
            'untagResource',
            'updateServer',
            'updateServerEngineAttributes',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateNode' => $this->associateNode(),
            'createBackup' => $this->createBackup(),
            'createServer' => $this->createServer(),
            'deleteBackup' => $this->deleteBackup(),
            'deleteServer' => $this->deleteServer(),
            'describeAccountAttributes' => $this->describeAccountAttributes(),
            'describeBackups' => $this->describeBackups(),
            'describeEvents' => $this->describeEvents(),
            'describeNodeAssociationStatus' => $this->describeNodeAssociationStatus(),
            'describeServers' => $this->describeServers(),
            'disassociateNode' => $this->disassociateNode(),
            'exportServerEngineAttribute' => $this->exportServerEngineAttribute(),
            'listTagsForResource' => $this->listTagsForResource(),
            'restoreServer' => $this->restoreServer(),
            'startMaintenance' => $this->startMaintenance(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateServer' => $this->updateServer(),
            'updateServerEngineAttributes' => $this->updateServerEngineAttributes(),
        };
    }
    private function associateNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NodeAssociationStatusToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Backup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3DataSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3DataUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3LogUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ToolsVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Server'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormationStackArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableAutomatedBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerArn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKING_UP'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SETUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAccountAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Used'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeBackups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Backups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3DataSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3DataUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3LogUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToolsVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogUrl'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeNodeAssociationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NodeAssociationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineAttributes'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Servers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormationStackArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisableAutomatedBackup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BACKING_UP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SETUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDER_MAINTENANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NodeAssociationStatusToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function exportServerEngineAttribute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EngineAttribute'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function restoreServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Server'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormationStackArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableAutomatedBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerArn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKING_UP'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SETUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startMaintenance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Server'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormationStackArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableAutomatedBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerArn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKING_UP'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SETUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
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
    private function updateServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Server'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormationStackArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableAutomatedBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerArn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKING_UP'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SETUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateServerEngineAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Server'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormationStackArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableAutomatedBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyPair'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerArn'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKING_UP'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_LOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SETUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}