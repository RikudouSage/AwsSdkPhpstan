<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class StorageGatewayClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\StorageGateway\StorageGatewayClient>
     */
    public function getClass(): string
    {
        return \Aws\StorageGateway\StorageGatewayClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'activateGateway',
            'addCache',
            'addTagsToResource',
            'addUploadBuffer',
            'addWorkingStorage',
            'assignTapePool',
            'associateFileSystem',
            'attachVolume',
            'cancelArchival',
            'cancelCacheReport',
            'cancelRetrieval',
            'createCachediSCSIVolume',
            'createNFSFileShare',
            'createSMBFileShare',
            'createSnapshot',
            'createSnapshotFromVolumeRecoveryPoint',
            'createStorediSCSIVolume',
            'createTapePool',
            'createTapeWithBarcode',
            'createTapes',
            'deleteAutomaticTapeCreationPolicy',
            'deleteBandwidthRateLimit',
            'deleteCacheReport',
            'deleteChapCredentials',
            'deleteFileShare',
            'deleteGateway',
            'deleteSnapshotSchedule',
            'deleteTape',
            'deleteTapeArchive',
            'deleteTapePool',
            'deleteVolume',
            'describeAvailabilityMonitorTest',
            'describeBandwidthRateLimit',
            'describeBandwidthRateLimitSchedule',
            'describeCache',
            'describeCacheReport',
            'describeCachediSCSIVolumes',
            'describeChapCredentials',
            'describeFileSystemAssociations',
            'describeGatewayInformation',
            'describeMaintenanceStartTime',
            'describeNFSFileShares',
            'describeSMBFileShares',
            'describeSMBSettings',
            'describeSnapshotSchedule',
            'describeStorediSCSIVolumes',
            'describeTapeArchives',
            'describeTapeRecoveryPoints',
            'describeTapes',
            'describeUploadBuffer',
            'describeVTLDevices',
            'describeWorkingStorage',
            'detachVolume',
            'disableGateway',
            'disassociateFileSystem',
            'evictFilesFailingUpload',
            'joinDomain',
            'listAutomaticTapeCreationPolicies',
            'listCacheReports',
            'listFileShares',
            'listFileSystemAssociations',
            'listGateways',
            'listLocalDisks',
            'listTagsForResource',
            'listTapePools',
            'listTapes',
            'listVolumeInitiators',
            'listVolumeRecoveryPoints',
            'listVolumes',
            'notifyWhenUploaded',
            'refreshCache',
            'removeTagsFromResource',
            'resetCache',
            'retrieveTapeArchive',
            'retrieveTapeRecoveryPoint',
            'setLocalConsolePassword',
            'setSMBGuestPassword',
            'shutdownGateway',
            'startAvailabilityMonitorTest',
            'startCacheReport',
            'startGateway',
            'updateAutomaticTapeCreationPolicy',
            'updateBandwidthRateLimit',
            'updateBandwidthRateLimitSchedule',
            'updateChapCredentials',
            'updateFileSystemAssociation',
            'updateGatewayInformation',
            'updateGatewaySoftwareNow',
            'updateMaintenanceStartTime',
            'updateNFSFileShare',
            'updateSMBFileShare',
            'updateSMBFileShareVisibility',
            'updateSMBLocalGroups',
            'updateSMBSecurityStrategy',
            'updateSnapshotSchedule',
            'updateVTLDeviceType',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'activateGateway' => $this->activateGateway(),
            'addCache' => $this->addCache(),
            'addTagsToResource' => $this->addTagsToResource(),
            'addUploadBuffer' => $this->addUploadBuffer(),
            'addWorkingStorage' => $this->addWorkingStorage(),
            'assignTapePool' => $this->assignTapePool(),
            'associateFileSystem' => $this->associateFileSystem(),
            'attachVolume' => $this->attachVolume(),
            'cancelArchival' => $this->cancelArchival(),
            'cancelCacheReport' => $this->cancelCacheReport(),
            'cancelRetrieval' => $this->cancelRetrieval(),
            'createCachediSCSIVolume' => $this->createCachediSCSIVolume(),
            'createNFSFileShare' => $this->createNFSFileShare(),
            'createSMBFileShare' => $this->createSMBFileShare(),
            'createSnapshot' => $this->createSnapshot(),
            'createSnapshotFromVolumeRecoveryPoint' => $this->createSnapshotFromVolumeRecoveryPoint(),
            'createStorediSCSIVolume' => $this->createStorediSCSIVolume(),
            'createTapePool' => $this->createTapePool(),
            'createTapeWithBarcode' => $this->createTapeWithBarcode(),
            'createTapes' => $this->createTapes(),
            'deleteAutomaticTapeCreationPolicy' => $this->deleteAutomaticTapeCreationPolicy(),
            'deleteBandwidthRateLimit' => $this->deleteBandwidthRateLimit(),
            'deleteCacheReport' => $this->deleteCacheReport(),
            'deleteChapCredentials' => $this->deleteChapCredentials(),
            'deleteFileShare' => $this->deleteFileShare(),
            'deleteGateway' => $this->deleteGateway(),
            'deleteSnapshotSchedule' => $this->deleteSnapshotSchedule(),
            'deleteTape' => $this->deleteTape(),
            'deleteTapeArchive' => $this->deleteTapeArchive(),
            'deleteTapePool' => $this->deleteTapePool(),
            'deleteVolume' => $this->deleteVolume(),
            'describeAvailabilityMonitorTest' => $this->describeAvailabilityMonitorTest(),
            'describeBandwidthRateLimit' => $this->describeBandwidthRateLimit(),
            'describeBandwidthRateLimitSchedule' => $this->describeBandwidthRateLimitSchedule(),
            'describeCache' => $this->describeCache(),
            'describeCacheReport' => $this->describeCacheReport(),
            'describeCachediSCSIVolumes' => $this->describeCachediSCSIVolumes(),
            'describeChapCredentials' => $this->describeChapCredentials(),
            'describeFileSystemAssociations' => $this->describeFileSystemAssociations(),
            'describeGatewayInformation' => $this->describeGatewayInformation(),
            'describeMaintenanceStartTime' => $this->describeMaintenanceStartTime(),
            'describeNFSFileShares' => $this->describeNFSFileShares(),
            'describeSMBFileShares' => $this->describeSMBFileShares(),
            'describeSMBSettings' => $this->describeSMBSettings(),
            'describeSnapshotSchedule' => $this->describeSnapshotSchedule(),
            'describeStorediSCSIVolumes' => $this->describeStorediSCSIVolumes(),
            'describeTapeArchives' => $this->describeTapeArchives(),
            'describeTapeRecoveryPoints' => $this->describeTapeRecoveryPoints(),
            'describeTapes' => $this->describeTapes(),
            'describeUploadBuffer' => $this->describeUploadBuffer(),
            'describeVTLDevices' => $this->describeVTLDevices(),
            'describeWorkingStorage' => $this->describeWorkingStorage(),
            'detachVolume' => $this->detachVolume(),
            'disableGateway' => $this->disableGateway(),
            'disassociateFileSystem' => $this->disassociateFileSystem(),
            'evictFilesFailingUpload' => $this->evictFilesFailingUpload(),
            'joinDomain' => $this->joinDomain(),
            'listAutomaticTapeCreationPolicies' => $this->listAutomaticTapeCreationPolicies(),
            'listCacheReports' => $this->listCacheReports(),
            'listFileShares' => $this->listFileShares(),
            'listFileSystemAssociations' => $this->listFileSystemAssociations(),
            'listGateways' => $this->listGateways(),
            'listLocalDisks' => $this->listLocalDisks(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTapePools' => $this->listTapePools(),
            'listTapes' => $this->listTapes(),
            'listVolumeInitiators' => $this->listVolumeInitiators(),
            'listVolumeRecoveryPoints' => $this->listVolumeRecoveryPoints(),
            'listVolumes' => $this->listVolumes(),
            'notifyWhenUploaded' => $this->notifyWhenUploaded(),
            'refreshCache' => $this->refreshCache(),
            'removeTagsFromResource' => $this->removeTagsFromResource(),
            'resetCache' => $this->resetCache(),
            'retrieveTapeArchive' => $this->retrieveTapeArchive(),
            'retrieveTapeRecoveryPoint' => $this->retrieveTapeRecoveryPoint(),
            'setLocalConsolePassword' => $this->setLocalConsolePassword(),
            'setSMBGuestPassword' => $this->setSMBGuestPassword(),
            'shutdownGateway' => $this->shutdownGateway(),
            'startAvailabilityMonitorTest' => $this->startAvailabilityMonitorTest(),
            'startCacheReport' => $this->startCacheReport(),
            'startGateway' => $this->startGateway(),
            'updateAutomaticTapeCreationPolicy' => $this->updateAutomaticTapeCreationPolicy(),
            'updateBandwidthRateLimit' => $this->updateBandwidthRateLimit(),
            'updateBandwidthRateLimitSchedule' => $this->updateBandwidthRateLimitSchedule(),
            'updateChapCredentials' => $this->updateChapCredentials(),
            'updateFileSystemAssociation' => $this->updateFileSystemAssociation(),
            'updateGatewayInformation' => $this->updateGatewayInformation(),
            'updateGatewaySoftwareNow' => $this->updateGatewaySoftwareNow(),
            'updateMaintenanceStartTime' => $this->updateMaintenanceStartTime(),
            'updateNFSFileShare' => $this->updateNFSFileShare(),
            'updateSMBFileShare' => $this->updateSMBFileShare(),
            'updateSMBFileShareVisibility' => $this->updateSMBFileShareVisibility(),
            'updateSMBLocalGroups' => $this->updateSMBLocalGroups(),
            'updateSMBSecurityStrategy' => $this->updateSMBSecurityStrategy(),
            'updateSnapshotSchedule' => $this->updateSnapshotSchedule(),
            'updateVTLDeviceType' => $this->updateVTLDeviceType(),
        };
    }
    private function activateGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addTagsToResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addUploadBuffer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addWorkingStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function assignTapePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateFileSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function attachVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelArchival(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelCacheReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheReportARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelRetrieval(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCachediSCSIVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createNFSFileShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSMBFileShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSnapshotFromVolumeRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeRecoveryPointTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStorediSCSIVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTapePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTapeWithBarcode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTapes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARNs'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAutomaticTapeCreationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBandwidthRateLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteCacheReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheReportARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteChapCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiatorName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFileShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSnapshotSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteTape(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteTapeArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteTapePool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAvailabilityMonitorTest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeBandwidthRateLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('AverageUploadRateLimitInBitsPerSec'),
                new \PHPStan\Type\Constant\ConstantStringType('AverageDownloadRateLimitInBitsPerSec'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeBandwidthRateLimitSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('BandwidthRateLimitIntervals'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartHourOfDay'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartMinuteOfHour'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndHourOfDay'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndMinuteOfHour'),
                    new \PHPStan\Type\Constant\ConstantStringType('DaysOfWeek'),
                    new \PHPStan\Type\Constant\ConstantStringType('AverageUploadRateLimitInBitsPerSec'),
                    new \PHPStan\Type\Constant\ConstantStringType('AverageDownloadRateLimitInBitsPerSec'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('DiskIds'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheAllocatedInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheUsedPercentage'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheDirtyPercentage'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheHitPercentage'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheMissPercentage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
            ]),
        ]);
    }
    private function describeCacheReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheReportInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheReportARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheReportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportCompletionPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InclusionFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExclusionFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UploadState'),
                            new \PHPStan\Type\Constant\ConstantStringType('UploadFailureReason'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UploadState'),
                            new \PHPStan\Type\Constant\ConstantStringType('UploadFailureReason'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeCachediSCSIVolumes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CachediSCSIVolumes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeAttachmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceSnapshotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeiSCSIAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsedInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfacePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('LunNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChapEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeChapCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChapCredentials'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretToAuthenticateInitiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiatorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretToAuthenticateTarget'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeFileSystemAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationInfoList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuditDestinationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointNetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationStatusDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheStaleTimeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddresses'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeGatewayInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayName'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayTimezone'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayState'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayNetworkInterfaces'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayType'),
                new \PHPStan\Type\Constant\ConstantStringType('NextUpdateAvailabilityDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastSoftwareUpdate'),
                new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VPCEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupARN'),
                new \PHPStan\Type\Constant\ConstantStringType('HostEnvironment'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('SoftwareUpdatesEndDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DeprecationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('SupportedGatewayCapacities'),
                new \PHPStan\Type\Constant\ConstantStringType('HostEnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('SoftwareVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv4Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('MacAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VMWARE'),
                    new \PHPStan\Type\Constant\ConstantStringType('HYPER-V'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                    new \PHPStan\Type\Constant\ConstantStringType('KVM'),
                    new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOWBALL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Small'),
                    new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('Large'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Small'),
                    new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('Large'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceStartTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                new \PHPStan\Type\Constant\ConstantStringType('DayOfMonth'),
                new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                new \PHPStan\Type\Constant\ConstantStringType('SoftwareUpdatePreferences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticUpdatePolicy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL_VERSIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMERGENCY_VERSIONS_ONLY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeNFSFileShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NFSFileShareInfoList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NFSFileShareDefaults'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultStorageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectACL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Squash'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadOnly'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuessMIMETypeEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterPays'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCEndpointDNSName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BucketRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuditDestinationARN'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FileMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SseS3'),
                        new \PHPStan\Type\Constant\ConstantStringType('SseKms'),
                        new \PHPStan\Type\Constant\ConstantStringType('DsseKms'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('private'),
                        new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                        new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                        new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheStaleTimeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeSMBFileShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SMBFileShareInfoList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultStorageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectACL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadOnly'),
                    new \PHPStan\Type\Constant\ConstantStringType('GuessMIMETypeEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequesterPays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMBACLEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessBasedEnumeration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdminUserList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidUserList'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidUserList'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuditDestinationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('CaseSensitivity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCEndpointDNSName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BucketRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('OplocksEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SseS3'),
                        new \PHPStan\Type\Constant\ConstantStringType('SseKms'),
                        new \PHPStan\Type\Constant\ConstantStringType('DsseKms'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('private'),
                        new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                        new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                        new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientSpecified'),
                        new \PHPStan\Type\Constant\ConstantStringType('CaseSensitive'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CacheStaleTimeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeSMBSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('SMBGuestPasswordSet'),
                new \PHPStan\Type\Constant\ConstantStringType('SMBSecurityStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSharesVisible'),
                new \PHPStan\Type\Constant\ConstantStringType('SMBLocalGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DETACHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('JOINED'),
                    new \PHPStan\Type\Constant\ConstantStringType('JOINING'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_ERROR'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClientSpecified'),
                    new \PHPStan\Type\Constant\ConstantStringType('MandatorySigning'),
                    new \PHPStan\Type\Constant\ConstantStringType('MandatoryEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('MandatoryEncryptionNoAes128'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayAdmins'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeSnapshotSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                new \PHPStan\Type\Constant\ConstantStringType('StartAt'),
                new \PHPStan\Type\Constant\ConstantStringType('RecurrenceInHours'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function describeStorediSCSIVolumes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorediSCSIVolumes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeAttachmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeDiskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceSnapshotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreservedExistingData'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeiSCSIAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsedInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfacePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('LunNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChapEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeTapeArchives(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeArchives'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeBarcode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeCreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrievedTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeUsedInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Worm'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolEntryDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTapeRecoveryPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('TapeRecoveryPointInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeRecoveryPointTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTapes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tapes'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeBarcode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeCreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VTLDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeUsedInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Worm'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolEntryDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUploadBuffer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('DiskIds'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadBufferUsedInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadBufferAllocatedInBytes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeVTLDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('VTLDevices'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VTLDeviceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('VTLDeviceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VTLDeviceVendor'),
                    new \PHPStan\Type\Constant\ConstantStringType('VTLDeviceProductIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceiSCSIAttributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfacePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChapEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkingStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('DiskIds'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkingStorageUsedInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkingStorageAllocatedInBytes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function detachVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disableGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateFileSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function evictFilesFailingUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotificationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function joinDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DETACHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('JOINED'),
                    new \PHPStan\Type\Constant\ConstantStringType('JOINING'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_ERROR'),
                ]),
            ]),
        ]);
    }
    private function listAutomaticTapeCreationPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutomaticTapeCreationPolicyInfos'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticTapeCreationRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TapeBarcodePrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TapeSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumNumTapes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Worm'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listCacheReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheReportList'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CacheReportARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheReportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportCompletionPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InclusionFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExclusionFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UploadState'),
                            new \PHPStan\Type\Constant\ConstantStringType('UploadFailureReason'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UploadState'),
                            new \PHPStan\Type\Constant\ConstantStringType('UploadFailureReason'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFileShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('FileShareInfoList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareType'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NFS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMB'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listFileSystemAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Gateways'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayType'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayOperationalState'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostEnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeprecationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SoftwareVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VMWARE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HYPER-V'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('KVM'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOWBALL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLocalDisks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('Disks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DiskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiskPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiskNode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiskSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiskAllocationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiskAllocationResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiskAttributeList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function listTapePools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PoolInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionLockType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionLockTimeInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLIANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOVERNANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTapes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeBarcode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TapeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolEntryDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVolumeInitiators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Initiators'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVolumeRecoveryPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeRecoveryPointInfos'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeUsageInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeRecoveryPointTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listVolumes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeInfos'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeAttachmentStatus'),
                ], [
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
    private function notifyWhenUploaded(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
                new \PHPStan\Type\Constant\ConstantStringType('NotificationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function refreshCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
                new \PHPStan\Type\Constant\ConstantStringType('NotificationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeTagsFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resetCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function retrieveTapeArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function retrieveTapeRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TapeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setLocalConsolePassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setSMBGuestPassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function shutdownGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startAvailabilityMonitorTest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startCacheReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CacheReportARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAutomaticTapeCreationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBandwidthRateLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBandwidthRateLimitSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateChapCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetARN'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiatorName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFileSystemAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemAssociationARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateGatewayInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateGatewaySoftwareNow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMaintenanceStartTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateNFSFileShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSMBFileShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FileShareARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSMBFileShareVisibility(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSMBLocalGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSMBSecurityStrategy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSnapshotSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateVTLDeviceType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VTLDeviceARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}