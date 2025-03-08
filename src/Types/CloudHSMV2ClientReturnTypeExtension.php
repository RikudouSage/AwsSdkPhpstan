<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudHSMV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudHSMV2\CloudHSMV2Client>
     */
    public function getClass(): string
    {
        return \Aws\CloudHSMV2\CloudHSMV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'copyBackupToRegion',
            'createCluster',
            'createHsm',
            'deleteBackup',
            'deleteCluster',
            'deleteHsm',
            'deleteResourcePolicy',
            'describeBackups',
            'describeClusters',
            'getResourcePolicy',
            'initializeCluster',
            'listTags',
            'modifyBackupAttributes',
            'modifyCluster',
            'putResourcePolicy',
            'restoreBackup',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'copyBackupToRegion' => $this->copyBackupToRegion(),
            'createCluster' => $this->createCluster(),
            'createHsm' => $this->createHsm(),
            'deleteBackup' => $this->deleteBackup(),
            'deleteCluster' => $this->deleteCluster(),
            'deleteHsm' => $this->deleteHsm(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'describeBackups' => $this->describeBackups(),
            'describeClusters' => $this->describeClusters(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'initializeCluster' => $this->initializeCluster(),
            'listTags' => $this->listTags(),
            'modifyBackupAttributes' => $this->modifyBackupAttributes(),
            'modifyCluster' => $this->modifyCluster(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'restoreBackup' => $this->restoreBackup(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function copyBackupToRegion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DestinationBackup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCluster'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hsms'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmTypeRollbackExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreCoPassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNINITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCsr'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManufacturerHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCertificate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createHsm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Hsm'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EniIpV6'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Backup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('NeverExpires'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
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
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hsms'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmTypeRollbackExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreCoPassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNINITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCsr'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManufacturerHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCertificate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteHsm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HsmId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('NeverExpires'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Clusters'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hsms'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmTypeRollbackExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreCoPassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNINITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCsr'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManufacturerHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCertificate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function initializeCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNINITIALIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODIFY_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyBackupAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Backup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('NeverExpires'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hsms'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmTypeRollbackExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreCoPassword'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetMapping'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNINITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCsr'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManufacturerHardwareCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCertificate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function restoreBackup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Backup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('NeverExpires'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackup'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_FIPS'),
                    ]),
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
}