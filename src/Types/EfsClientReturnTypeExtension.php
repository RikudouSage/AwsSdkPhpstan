<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EfsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Efs\EfsClient>
     */
    public function getClass(): string
    {
        return \Aws\Efs\EfsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAccessPoint',
            'createFileSystem',
            'createMountTarget',
            'createReplicationConfiguration',
            'createTags',
            'deleteAccessPoint',
            'deleteFileSystem',
            'deleteFileSystemPolicy',
            'deleteMountTarget',
            'deleteReplicationConfiguration',
            'deleteTags',
            'describeAccessPoints',
            'describeAccountPreferences',
            'describeBackupPolicy',
            'describeFileSystemPolicy',
            'describeFileSystems',
            'describeLifecycleConfiguration',
            'describeMountTargetSecurityGroups',
            'describeMountTargets',
            'describeReplicationConfigurations',
            'describeTags',
            'listTagsForResource',
            'modifyMountTargetSecurityGroups',
            'putAccountPreferences',
            'putBackupPolicy',
            'putFileSystemPolicy',
            'putLifecycleConfiguration',
            'tagResource',
            'untagResource',
            'updateFileSystem',
            'updateFileSystemProtection',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAccessPoint' => $this->createAccessPoint(),
            'createFileSystem' => $this->createFileSystem(),
            'createMountTarget' => $this->createMountTarget(),
            'createReplicationConfiguration' => $this->createReplicationConfiguration(),
            'createTags' => $this->createTags(),
            'deleteAccessPoint' => $this->deleteAccessPoint(),
            'deleteFileSystem' => $this->deleteFileSystem(),
            'deleteFileSystemPolicy' => $this->deleteFileSystemPolicy(),
            'deleteMountTarget' => $this->deleteMountTarget(),
            'deleteReplicationConfiguration' => $this->deleteReplicationConfiguration(),
            'deleteTags' => $this->deleteTags(),
            'describeAccessPoints' => $this->describeAccessPoints(),
            'describeAccountPreferences' => $this->describeAccountPreferences(),
            'describeBackupPolicy' => $this->describeBackupPolicy(),
            'describeFileSystemPolicy' => $this->describeFileSystemPolicy(),
            'describeFileSystems' => $this->describeFileSystems(),
            'describeLifecycleConfiguration' => $this->describeLifecycleConfiguration(),
            'describeMountTargetSecurityGroups' => $this->describeMountTargetSecurityGroups(),
            'describeMountTargets' => $this->describeMountTargets(),
            'describeReplicationConfigurations' => $this->describeReplicationConfigurations(),
            'describeTags' => $this->describeTags(),
            'listTagsForResource' => $this->listTagsForResource(),
            'modifyMountTargetSecurityGroups' => $this->modifyMountTargetSecurityGroups(),
            'putAccountPreferences' => $this->putAccountPreferences(),
            'putBackupPolicy' => $this->putBackupPolicy(),
            'putFileSystemPolicy' => $this->putFileSystemPolicy(),
            'putLifecycleConfiguration' => $this->putLifecycleConfiguration(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateFileSystem' => $this->updateFileSystem(),
            'updateFileSystemProtection' => $this->updateFileSystemProtection(),
        };
    }
    private function createAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessPointId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                new \PHPStan\Type\Constant\ConstantStringType('PosixUser'),
                new \PHPStan\Type\Constant\ConstantStringType('RootDirectory'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                new \PHPStan\Type\Constant\ConstantStringType('LifeCycleState'),
            ], [
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
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecondaryGids'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerUid'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerGid'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ]),
            ]),
        ]);
    }
    private function createFileSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LifeCycleState'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfMountTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('SizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('PerformanceMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('ThroughputMode'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputInMibps'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneName'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemProtection'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueInIA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueInStandard'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueInArchive'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('generalPurpose'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxIO'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('bursting'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioned'),
                    new \PHPStan\Type\Constant\ConstantStringType('elastic'),
                ]),
                new \PHPStan\Type\FloatType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationOverwriteProtection'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createMountTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                new \PHPStan\Type\Constant\ConstantStringType('MountTargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('LifeCycleState'),
                new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneName'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginalSourceFileSystemArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemOwnerId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastReplicatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
    private function createTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFileSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFileSystemPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMountTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAccessPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessPointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PosixUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LifeCycleState'),
                    ], [
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecondaryGids'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreationInfo'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerUid'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerGid'),
                                new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('updating'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAccountPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceIdPreference'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LONG_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_ID'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MOUNT_TARGET'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBackupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeFileSystemPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFileSystems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LifeCycleState'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfMountTargets'),
                        new \PHPStan\Type\Constant\ConstantStringType('SizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('PerformanceMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThroughputMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputInMibps'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemProtection'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('updating'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValueInIA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValueInStandard'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValueInArchive'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('generalPurpose'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxIO'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('bursting'),
                            new \PHPStan\Type\Constant\ConstantStringType('provisioned'),
                            new \PHPStan\Type\Constant\ConstantStringType('elastic'),
                        ]),
                        new \PHPStan\Type\FloatType(),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicationOverwriteProtection'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REPLICATING'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLifecycleConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LifecyclePolicies'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitionToIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitionToPrimaryStorageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitionToArchive'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_7_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_14_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_30_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_60_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_90_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_1_DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_180_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_270_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_365_DAYS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_1_ACCESS'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_1_DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_7_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_14_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_30_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_60_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_90_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_180_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_270_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_365_DAYS'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeMountTargetSecurityGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeMountTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('MountTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MountTargetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LifeCycleState'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('updating'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\StringType(),
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
    private function describeReplicationConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Replications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginalSourceFileSystemArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceFileSystemOwnerId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastReplicatedTimestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAUSING'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
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
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
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
    private function modifyMountTargetSecurityGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putAccountPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceIdPreference'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LONG_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT_ID'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MOUNT_TARGET'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function putBackupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putFileSystemPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putLifecycleConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LifecyclePolicies'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitionToIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitionToPrimaryStorageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitionToArchive'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_7_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_14_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_30_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_60_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_90_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_1_DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_180_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_270_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_365_DAYS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_1_ACCESS'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_1_DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_7_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_14_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_30_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_60_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_90_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_180_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_270_DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_365_DAYS'),
                        ]),
                    ]),
                ])),
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
    private function updateFileSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LifeCycleState'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfMountTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('SizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('PerformanceMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('ThroughputMode'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputInMibps'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneName'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemProtection'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueInIA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueInStandard'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueInArchive'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('generalPurpose'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxIO'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('bursting'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioned'),
                    new \PHPStan\Type\Constant\ConstantStringType('elastic'),
                ]),
                new \PHPStan\Type\FloatType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationOverwriteProtection'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateFileSystemProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationOverwriteProtection'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICATING'),
                ]),
            ]),
        ]);
    }
}