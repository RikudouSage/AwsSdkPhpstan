<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BackupClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Backup\BackupClient>
     */
    public function getClass(): string
    {
        return \Aws\Backup\BackupClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelLegalHold',
            'createBackupPlan',
            'createBackupSelection',
            'createBackupVault',
            'createFramework',
            'createLegalHold',
            'createLogicallyAirGappedBackupVault',
            'createReportPlan',
            'createRestoreTestingPlan',
            'createRestoreTestingSelection',
            'deleteBackupPlan',
            'deleteBackupSelection',
            'deleteBackupVault',
            'deleteBackupVaultAccessPolicy',
            'deleteBackupVaultLockConfiguration',
            'deleteBackupVaultNotifications',
            'deleteFramework',
            'deleteRecoveryPoint',
            'deleteReportPlan',
            'deleteRestoreTestingPlan',
            'deleteRestoreTestingSelection',
            'describeBackupJob',
            'describeBackupVault',
            'describeCopyJob',
            'describeFramework',
            'describeGlobalSettings',
            'describeProtectedResource',
            'describeRecoveryPoint',
            'describeRegionSettings',
            'describeReportJob',
            'describeReportPlan',
            'describeRestoreJob',
            'disassociateRecoveryPoint',
            'disassociateRecoveryPointFromParent',
            'exportBackupPlanTemplate',
            'getBackupPlan',
            'getBackupPlanFromJSON',
            'getBackupPlanFromTemplate',
            'getBackupSelection',
            'getBackupVaultAccessPolicy',
            'getBackupVaultNotifications',
            'getLegalHold',
            'getRecoveryPointIndexDetails',
            'getRecoveryPointRestoreMetadata',
            'getRestoreJobMetadata',
            'getRestoreTestingInferredMetadata',
            'getRestoreTestingPlan',
            'getRestoreTestingSelection',
            'getSupportedResourceTypes',
            'listBackupJobSummaries',
            'listBackupJobs',
            'listBackupPlanTemplates',
            'listBackupPlanVersions',
            'listBackupPlans',
            'listBackupSelections',
            'listBackupVaults',
            'listCopyJobSummaries',
            'listCopyJobs',
            'listFrameworks',
            'listIndexedRecoveryPoints',
            'listLegalHolds',
            'listProtectedResources',
            'listProtectedResourcesByBackupVault',
            'listRecoveryPointsByBackupVault',
            'listRecoveryPointsByLegalHold',
            'listRecoveryPointsByResource',
            'listReportJobs',
            'listReportPlans',
            'listRestoreJobSummaries',
            'listRestoreJobs',
            'listRestoreJobsByProtectedResource',
            'listRestoreTestingPlans',
            'listRestoreTestingSelections',
            'listTags',
            'putBackupVaultAccessPolicy',
            'putBackupVaultLockConfiguration',
            'putBackupVaultNotifications',
            'putRestoreValidationResult',
            'startBackupJob',
            'startCopyJob',
            'startReportJob',
            'startRestoreJob',
            'stopBackupJob',
            'tagResource',
            'untagResource',
            'updateBackupPlan',
            'updateFramework',
            'updateGlobalSettings',
            'updateRecoveryPointIndexSettings',
            'updateRecoveryPointLifecycle',
            'updateRegionSettings',
            'updateReportPlan',
            'updateRestoreTestingPlan',
            'updateRestoreTestingSelection',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelLegalHold' => $this->cancelLegalHold(),
            'createBackupPlan' => $this->createBackupPlan(),
            'createBackupSelection' => $this->createBackupSelection(),
            'createBackupVault' => $this->createBackupVault(),
            'createFramework' => $this->createFramework(),
            'createLegalHold' => $this->createLegalHold(),
            'createLogicallyAirGappedBackupVault' => $this->createLogicallyAirGappedBackupVault(),
            'createReportPlan' => $this->createReportPlan(),
            'createRestoreTestingPlan' => $this->createRestoreTestingPlan(),
            'createRestoreTestingSelection' => $this->createRestoreTestingSelection(),
            'deleteBackupPlan' => $this->deleteBackupPlan(),
            'deleteBackupSelection' => $this->deleteBackupSelection(),
            'deleteBackupVault' => $this->deleteBackupVault(),
            'deleteBackupVaultAccessPolicy' => $this->deleteBackupVaultAccessPolicy(),
            'deleteBackupVaultLockConfiguration' => $this->deleteBackupVaultLockConfiguration(),
            'deleteBackupVaultNotifications' => $this->deleteBackupVaultNotifications(),
            'deleteFramework' => $this->deleteFramework(),
            'deleteRecoveryPoint' => $this->deleteRecoveryPoint(),
            'deleteReportPlan' => $this->deleteReportPlan(),
            'deleteRestoreTestingPlan' => $this->deleteRestoreTestingPlan(),
            'deleteRestoreTestingSelection' => $this->deleteRestoreTestingSelection(),
            'describeBackupJob' => $this->describeBackupJob(),
            'describeBackupVault' => $this->describeBackupVault(),
            'describeCopyJob' => $this->describeCopyJob(),
            'describeFramework' => $this->describeFramework(),
            'describeGlobalSettings' => $this->describeGlobalSettings(),
            'describeProtectedResource' => $this->describeProtectedResource(),
            'describeRecoveryPoint' => $this->describeRecoveryPoint(),
            'describeRegionSettings' => $this->describeRegionSettings(),
            'describeReportJob' => $this->describeReportJob(),
            'describeReportPlan' => $this->describeReportPlan(),
            'describeRestoreJob' => $this->describeRestoreJob(),
            'disassociateRecoveryPoint' => $this->disassociateRecoveryPoint(),
            'disassociateRecoveryPointFromParent' => $this->disassociateRecoveryPointFromParent(),
            'exportBackupPlanTemplate' => $this->exportBackupPlanTemplate(),
            'getBackupPlan' => $this->getBackupPlan(),
            'getBackupPlanFromJSON' => $this->getBackupPlanFromJSON(),
            'getBackupPlanFromTemplate' => $this->getBackupPlanFromTemplate(),
            'getBackupSelection' => $this->getBackupSelection(),
            'getBackupVaultAccessPolicy' => $this->getBackupVaultAccessPolicy(),
            'getBackupVaultNotifications' => $this->getBackupVaultNotifications(),
            'getLegalHold' => $this->getLegalHold(),
            'getRecoveryPointIndexDetails' => $this->getRecoveryPointIndexDetails(),
            'getRecoveryPointRestoreMetadata' => $this->getRecoveryPointRestoreMetadata(),
            'getRestoreJobMetadata' => $this->getRestoreJobMetadata(),
            'getRestoreTestingInferredMetadata' => $this->getRestoreTestingInferredMetadata(),
            'getRestoreTestingPlan' => $this->getRestoreTestingPlan(),
            'getRestoreTestingSelection' => $this->getRestoreTestingSelection(),
            'getSupportedResourceTypes' => $this->getSupportedResourceTypes(),
            'listBackupJobSummaries' => $this->listBackupJobSummaries(),
            'listBackupJobs' => $this->listBackupJobs(),
            'listBackupPlanTemplates' => $this->listBackupPlanTemplates(),
            'listBackupPlanVersions' => $this->listBackupPlanVersions(),
            'listBackupPlans' => $this->listBackupPlans(),
            'listBackupSelections' => $this->listBackupSelections(),
            'listBackupVaults' => $this->listBackupVaults(),
            'listCopyJobSummaries' => $this->listCopyJobSummaries(),
            'listCopyJobs' => $this->listCopyJobs(),
            'listFrameworks' => $this->listFrameworks(),
            'listIndexedRecoveryPoints' => $this->listIndexedRecoveryPoints(),
            'listLegalHolds' => $this->listLegalHolds(),
            'listProtectedResources' => $this->listProtectedResources(),
            'listProtectedResourcesByBackupVault' => $this->listProtectedResourcesByBackupVault(),
            'listRecoveryPointsByBackupVault' => $this->listRecoveryPointsByBackupVault(),
            'listRecoveryPointsByLegalHold' => $this->listRecoveryPointsByLegalHold(),
            'listRecoveryPointsByResource' => $this->listRecoveryPointsByResource(),
            'listReportJobs' => $this->listReportJobs(),
            'listReportPlans' => $this->listReportPlans(),
            'listRestoreJobSummaries' => $this->listRestoreJobSummaries(),
            'listRestoreJobs' => $this->listRestoreJobs(),
            'listRestoreJobsByProtectedResource' => $this->listRestoreJobsByProtectedResource(),
            'listRestoreTestingPlans' => $this->listRestoreTestingPlans(),
            'listRestoreTestingSelections' => $this->listRestoreTestingSelections(),
            'listTags' => $this->listTags(),
            'putBackupVaultAccessPolicy' => $this->putBackupVaultAccessPolicy(),
            'putBackupVaultLockConfiguration' => $this->putBackupVaultLockConfiguration(),
            'putBackupVaultNotifications' => $this->putBackupVaultNotifications(),
            'putRestoreValidationResult' => $this->putRestoreValidationResult(),
            'startBackupJob' => $this->startBackupJob(),
            'startCopyJob' => $this->startCopyJob(),
            'startReportJob' => $this->startReportJob(),
            'startRestoreJob' => $this->startRestoreJob(),
            'stopBackupJob' => $this->stopBackupJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateBackupPlan' => $this->updateBackupPlan(),
            'updateFramework' => $this->updateFramework(),
            'updateGlobalSettings' => $this->updateGlobalSettings(),
            'updateRecoveryPointIndexSettings' => $this->updateRecoveryPointIndexSettings(),
            'updateRecoveryPointLifecycle' => $this->updateRecoveryPointLifecycle(),
            'updateRegionSettings' => $this->updateRegionSettings(),
            'updateReportPlan' => $this->updateReportPlan(),
            'updateRestoreTestingPlan' => $this->updateRestoreTestingPlan(),
            'updateRestoreTestingSelection' => $this->updateRestoreTestingSelection(),
        };
    }
    private function cancelLegalHold(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createBackupPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function createBackupSelection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SelectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createBackupVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkName'),
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLegalHold(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Title'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LegalHoldId'),
                new \PHPStan\Type\Constant\ConstantStringType('LegalHoldArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointSelection'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VaultNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToDate'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createLogicallyAirGappedBackupVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('VaultState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function createReportPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportPlanName'),
                new \PHPStan\Type\Constant\ConstantStringType('ReportPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createRestoreTestingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRestoreTestingSelection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingSelectionName'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBackupPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBackupSelection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBackupVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBackupVaultAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBackupVaultLockConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBackupVaultNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteReportPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRestoreTestingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRestoreTestingSelection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeBackupJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('PercentDone'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('BytesTransferred'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpectedCompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('StartBy'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfChildJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('ChildJobsInState'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageCategory'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRuleId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                ]), new \PHPStan\Type\IntegerType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBackupVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VaultType'),
                new \PHPStan\Type\Constant\ConstantStringType('VaultState'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfRecoveryPoints'),
                new \PHPStan\Type\Constant\ConstantStringType('Locked'),
                new \PHPStan\Type\Constant\ConstantStringType('MinRetentionDays'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxRetentionDays'),
                new \PHPStan\Type\Constant\ConstantStringType('LockDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_VAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOGICALLY_AIR_GAPPED_BACKUP_VAULT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeCopyJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopyJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationBackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationRecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompositeMemberIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfChildJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChildJobsInState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageCategory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRuleId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkName'),
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkControls'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('IdempotencyToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ControlName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ControlInputParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ControlScope'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceResourceIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceResourceTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeGlobalSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeProtectedResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('LastBackupTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('LastBackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastRecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRestoreExecutionTimeMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRestoreJobCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRestoreRecoveryPointCreationDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceBackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('CalculatedLifecycle'),
                new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IsEncrypted'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                new \PHPStan\Type\Constant\ConstantStringType('LastRestoreTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentRecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CompositeMemberIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('VaultType'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexStatusMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupRuleId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WARM'),
                    new \PHPStan\Type\Constant\ConstantStringType('COLD'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_VAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOGICALLY_AIR_GAPPED_BACKUP_VAULT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTypeOptInPreference'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTypeManagementPreference'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
            ]),
        ]);
    }
    private function describeReportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportJob'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Keys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeReportPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportPlan'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportSetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportDeliveryChannel'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAttemptedExecutionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulExecutionTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReportTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('FrameworkArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfFrameworks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Formats'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeRestoreJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('PercentDone'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpectedCompletionTimeMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('ValidationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ValidationStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionStatusMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateRecoveryPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateRecoveryPointFromParent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function exportBackupPlanTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanTemplateJson'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackupPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBackupVaultName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartWindowMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionWindowMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CopyActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableContinuousBackup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpressionTimezone'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexActions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationBackupVaultArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function getBackupPlanFromJSON(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlan'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBackupVaultName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartWindowMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionWindowMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CopyActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableContinuousBackup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpressionTimezone'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexActions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationBackupVaultArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getBackupPlanFromTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanDocument'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBackupVaultName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartWindowMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionWindowMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CopyActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableContinuousBackup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpressionTimezone'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexActions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationBackupVaultArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getBackupSelection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupSelection'),
                new \PHPStan\Type\Constant\ConstantStringType('SelectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SelectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListOfTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConditionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConditionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConditionValue'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STRINGEQUALS'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringNotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringLike'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringNotLike'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackupVaultAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackupVaultNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SNSTopicArn'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultEvents'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_JOB_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_JOB_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_JOB_SUCCESSFUL'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_JOB_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_JOB_EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_JOB_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_JOB_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_JOB_SUCCESSFUL'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_JOB_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPY_JOB_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPY_JOB_SUCCESSFUL'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPY_JOB_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RECOVERY_POINT_MODIFIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_PLAN_CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_PLAN_MODIFIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3_BACKUP_OBJECT_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3_RESTORE_OBJECT_FAILED'),
                ])),
            ]),
        ]);
    }
    private function getLegalHold(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Title'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CancelDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('LegalHoldId'),
                new \PHPStan\Type\Constant\ConstantStringType('LegalHoldArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CancellationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('RetainRecordUntil'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointSelection'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VaultNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToDate'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRecoveryPointIndexDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexCreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexDeletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexCompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalItemsIndexed'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getRecoveryPointRestoreMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRestoreJobMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestoreJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getRestoreTestingInferredMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InferredMetadata'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getRestoreTestingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlan'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpressionTimezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartWindowHours'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeVaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeVaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelectionWindowDays'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LATEST_WITHIN_WINDOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('RANDOM_WITHIN_WINDOW'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT'),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getRestoreTestingSelection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingSelection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectedResourceArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectedResourceConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectedResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreMetadataOverrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingSelectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidationWindowHours'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringNotEquals'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getSupportedResourceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listBackupJobSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('AggregationPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATE_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBackupJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentDone'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedCompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesTransferred'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageCategory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRuleId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBackupPlanTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanTemplatesList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanTemplateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listBackupPlanVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersionsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function listBackupPlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlansList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function listBackupSelections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupSelectionsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SelectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listBackupVaults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VaultType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VaultState'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfRecoveryPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinRetentionDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxRetentionDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('LockDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKUP_VAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOGICALLY_AIR_GAPPED_BACKUP_VAULT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCopyJobSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopyJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('AggregationPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATE_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCopyJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopyJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CopyJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationBackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationRecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompositeMemberIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfChildJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChildJobsInState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageCategory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRuleId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFrameworks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Frameworks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FrameworkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FrameworkDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfControls'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIndexedRecoveryPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexedRecoveryPoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupCreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexCreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLegalHolds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('LegalHolds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LegalHoldId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LegalHoldArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CancellationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listProtectedResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastBackupTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastBackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRecoveryPointArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProtectedResourcesByBackupVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastBackupTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastBackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRecoveryPointArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecoveryPointsByBackupVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPoints'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupVaultArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalculatedLifecycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRestoreTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentRecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompositeMemberIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VaultType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupRuleId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteAt'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKUP_VAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOGICALLY_AIR_GAPPED_BACKUP_VAULT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listRecoveryPointsByLegalHold(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecoveryPointsByResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPoints'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentRecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VaultType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BACKUP_VAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOGICALLY_AIR_GAPPED_BACKUP_VAULT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listReportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportDestination'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Keys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReportPlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportPlans'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportPlanDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportSetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportDeliveryChannel'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAttemptedExecutionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulExecutionTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReportTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('FrameworkArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfFrameworks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Formats'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRestoreJobSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestoreJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('AggregationPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATE_ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRestoreJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestoreJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentDone'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedCompletionTimeMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointCreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidationStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRestoreJobsByProtectedResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestoreJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentDone'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedCompletionTimeMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointCreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidationStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRestoreTestingPlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlans'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpressionTimezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartWindowHours'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function listRestoreTestingSelections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingSelections'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectedResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingSelectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidationWindowHours'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putBackupVaultAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBackupVaultLockConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBackupVaultNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putRestoreValidationResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startBackupJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function startCopyJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopyJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('IsParent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function startReportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportJobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startRestoreJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestoreJobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopBackupJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
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
    private function updateBackupPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function updateFramework(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkName'),
                new \PHPStan\Type\Constant\ConstantStringType('FrameworkArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateGlobalSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRecoveryPointIndexSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Index'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function updateRecoveryPointLifecycle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                new \PHPStan\Type\Constant\ConstantStringType('CalculatedLifecycle'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptInToArchiveForSupportedResources'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateRegionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateReportPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportPlanName'),
                new \PHPStan\Type\Constant\ConstantStringType('ReportPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateRestoreTestingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateRestoreTestingSelection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingPlanName'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreTestingSelectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}